<?php

declare(strict_types=1);

namespace App\Module\Admin\Presenters;

use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;


final class HomePresenter
{
    protected function createComponentMyForm(): Form
    {
        $form = new Form;
        
        $form->addText('name', 'Jméno:')
            ->setRequired();
        $form->addText('surname', 'Přijmení:')
            ->setRequired();
        
        $address = $form->addContainer('address');
        $address->addText('street', 'Ulice:')
            ->setRequired();
        $address->addText('city', 'Město:')
            ->setRequired();
        $address->addText('country', 'Země:')
            ->setRequired();

        $form->addSubmit('send', 'Uložit a publikovat');
        
        return $form;
    }
}
