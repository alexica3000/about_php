<?php

interface Renderable
{
    public function render() : string;
}

class RenderableGroup implements Renderable
{
    protected $elements = [];

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;

        return $this;
    }

    public function render(): string
    {
        $result = '';

        foreach ($this->elements as $element) {
            $result .= $element->render();
        }

        return $result;
    }
}

class Form extends RenderableGroup
{
    public function render(): string
    {
        return '<form>' . parent::render() . '</form>';
    }
}

class DivGroup extends RenderableGroup
{
    public function render(): string
    {
        return '<div>' . parent::render() . '</div>';
    }
}

class InputElement implements Renderable
{
    protected $type = 'text';

    public function render(): string
    {
        return '<input type="' . $this->type . '" />';
    }
}

class RadioInputElement extends InputElement
{
    protected $type = 'radio';
}

class FormButtonElement extends InputElement
{
    protected $type = 'submit';
}

echo (new Form())
    ->addElement(new InputElement())
    ->addElement(
        (new DivGroup())
            ->addElement(new RadioInputElement())
            ->addElement(new RadioInputElement())
        )
    ->addElement(new FormButtonElement())
    ->render()
;
