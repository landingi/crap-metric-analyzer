<?php

namespace Landingi\QualityTools\Coverage;

use Landingi\QualityTools\Coverage\Package\Coverage;

interface CoverageValidator
{
    public function validate(Coverage $coverage): array;
}
