<?php

namespace Dynamic\Elements\CTA\Elements\Test;

use SilverStripe\Forms\FieldList;
use SilverStripe\Dev\SapphireTest;
use Dynamic\Elements\CTA\Elements\ElementCallToAction;

class ElementCallToActionTest extends SapphireTest
{
    protected static $fixture_file = 'call-to-action.yml';

    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ElementCallToAction::class, 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }
}
