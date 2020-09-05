<?php

namespace app\controller;
use app\migration\MainMigration;


class MigrationController extends Controller
{
    public function actionIndex()
    {
        MainMigration::run();
        $this->redirect('/');
    }
}