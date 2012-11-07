<?php

class MealController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $model = $this->loadModel($id);
        $eateryModel = Eatery::model()->findByPk((int)$model->eateryID);
        $this->render('view', array(
            'model' => $model,
            'eateryModel' => $eateryModel
        ));

    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $mealModel = new Meal;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);


        if (isset($_POST['Meal'])) {
            $cost = $_POST['Meal']['cost'];
            $matches = array();
            if (preg_match('/(^[0-9]+[,.]{1}[0-9]{0,2}$)|(^[0-9]+$)/', $cost)) {
                if(strpos($cost, ',')) {
                    $matches = explode(',', $cost);
                    $cost = $matches[0] . '.' . $matches[1];
                }
                $_POST['Meal']['cost'] = (double)$cost;
            } else {
                $_POST['Meal']['cost'] = '';
            }
            

            $mealModel->attributes = $_POST['Meal'];
            if ($mealModel->save()) {
                if (isset($_POST['Dish'])) {
                    foreach ($_POST['Dish'] as $dishID) {
                        $mealDishModel = new MealDish;
                        $mealDishModel->attributes = array(
                            'mealID' => $mealModel->mealID,
                            'dishID' => $dishID
                            );
                        $mealDishModel->save();
                    }
                    $this->redirect(array('view', 'id' => $mealModel->mealID));
                }
            }
        }

        $this->render('create', array(
            'model' => $mealModel,
            'dishModel' => new Dish
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Meal'])) {
            $model->attributes = $_POST['Meal'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->mealID));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Meal');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Meal('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Meal']))
            $model->attributes = $_GET['Meal'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Meal::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'meal-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
