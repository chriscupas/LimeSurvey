<?php

use LimeSurvey\Datavalueobjects\GeneralOption;
use LimeSurvey\Datavalueobjects\FormElement;
use LimeSurvey\Datavalueobjects\SwitchOption;

class SaveAsDefaultGeneralOption extends GeneralOption
{
    /**
     * @param Question $question
     */
    public function __construct(Question $question)
    {
        $this->name = 'save_as_default';
        $this->title = gT('Save as default values');
        $this->inputType = 'switch';
        $this->disableInActive = true;
        $this->formElement = new FormElement(
            'save_as_default',
            null,
            gT('All attribute values for this question type will be saved as default'),
            $question->same_default == 1 ? 'Y' : 'N',
            [
                'classes' => [],
                'options' => [
                    new SwitchOption(gt('Off'), 'N'),
                    new SwitchOption(gt('On'), 'Y'),
                ]
            ]
        );
    }
}
