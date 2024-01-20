<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class CategoryPresenter extends Nette\Application\UI\Presenter
{

    public function actionPage($cpu, $page = 1)
    {
        $this->template->cpu = $cpu;
        $this->template->page = $page;
        
    }
    









}
