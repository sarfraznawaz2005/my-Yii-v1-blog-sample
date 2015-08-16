<?php

class PostController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array(
                'allow',  // allow all users to access 'index' and 'view' actions.
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array(
                'allow', // allow authenticated users to access all actions
                'users' => array('@'),
            ),
            array(
                'deny',  // deny all users
                'users' => array('*'),
            ),
        );
    }

    private function loadModel($id)
    {
        $model = Post::model()->findByPk($id);

        if ($model == null) {
            throw new CHttpException('404', 'No model with that ID could be found.');
        }

        return $model;
    }

    public function actionIndex()
    {
        $criteria = new CDbCriteria(array(
            'order' => 'created DESC'
        ));

        $dataProvider = new CActiveDataProvider('Post', array(
            'pagination' => array(
                'pageSize' => Yii::app()->params['postsPerPage'],
            ),
            'criteria' => $criteria,
        ));

        //var_dump($dataProvider);exit;

        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionCreate()
    {
        $model = new Post();

        if (isset($_POST['Post'])) {
            $model->attributes = $_POST['Post'];
            $model->user_id = Yii::app()->user->id;

            if ($model->save()) {
                $id = $model->id;
                $model->unsetAttributes(); // reset form

                Yii::app()->user->setFlash('success', "Post Created!");
                $this->redirect(array('post/view', 'id' => $id));
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionView($id)
    {
        $model = $this->loadModel($id);

        if (isset($_POST['Comment'])) {
            $modelComment = new Comment();
            $modelComment->attributes = $_POST['Comment'];
            $modelComment->post_id = $id;

            if ($modelComment->save()) {
                $modelComment->unsetAttributes(); // reset form
                Yii::app()->user->setFlash('success', "Comment added!");
            }
        }

        $this->render('view', array('model' => $model));
    }

    public function actionManage()
    {
        $model = new Post('search');

        if (isset($_GET['Post'])) {
            $model->attributes = $_GET['Post'];
        }

        $params = array(
            'model' => $model,
        );

        if (!isset($_GET['ajax'])) {
            $this->render('manage', $params);
        } else {
            $this->renderPartial('manage', $params);
        }
    }

    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax'])) {
                $this->redirect(array('index'));
            }
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

}
