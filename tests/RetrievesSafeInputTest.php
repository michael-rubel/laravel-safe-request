<?php

namespace MichaelRubel\SafeFormRequest\Tests;

use Illuminate\Support\Facades\Validator;
use MichaelRubel\SafeFormRequest\Tests\Stubs\MySafeFormRequest;

class RetrievesSafeInputTest extends TestCase
{
    /** @test */
    public function testRetrievesSafeInput(): void
    {
        $formRequest = app(MySafeFormRequest::class);
        $formRequest->initialize([
            'safe'   => 'It Is Safe!',
            'unsafe' => true,
        ]);
        $formRequest->setValidator(
            Validator::make($formRequest->all(), $formRequest->rules())
        );

        $this->assertNull($formRequest->unsafe);
        $this->assertTrue($formRequest->all()['unsafe']);
        $this->assertSame('It Is Safe!', $formRequest->safe);
        $this->assertNull($formRequest->safe()->collect()->get('unsafe'));
    }
}
