<?php declare(strict_types=1);


if (!isset($argv[1])) {
    echo 'Solution Name required, please follow the format A000Template';
    return;
}

$problemName = $argv[1];
$parts = explode(' ',$problemName);
$className = '';

foreach($parts as $index => $name) {
    $name = strtolower($name);
    if ($index !== 0) {
        $name = ucfirst($name);
    }
    if (is_numeric($name)) {
        $name = str_pad($name, 4, '0');
    }
    $className .= str_replace('.','', $name);
}
$className = "A$className";
if (empty($className)) {
    echo 'Solution Name required, please follow the format A000Template';
    return;
}

$srcDir = "./src/$className";
$testDir = "./tests/$className";

if (is_dir($srcDir) || is_dir($testDir)) {
    echo 'Solution exists, exiting...';
    return;
}

mkdir($srcDir);
mkdir($testDir);

$problemMdTemplate = <<<EOT
## $problemName

Sample

**Example 1:**

<pre>
<b>Input:</b> 
<b>Output:</b> 
<b>Explanation:</b>

</pre>

**Example 2:**

<pre>
<b>Input:</b> 
<b>Output:</b> 
<b>Explanation:</b> 

</pre>

**Constraints:**
- `1<100`
- `2<200`
EOT;

$solutionPhpTemplate = <<<EOT
<?php declare(strict_types=1);

namespace App\\$className;

class Solution {
    
    public function sample(): void {
        return;
    }
}
EOT;

$solutionPhpTestTemplate = <<<EOT
<?php declare(strict_types=1);

namespace App\\$className;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[12,345,2,6,7986], 2],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testSample() {
        \$s = new Solution();
        \$this->assertEquals('', '');
    }
}
EOT;
;

$file = fopen("$srcDir/Problem.MD","w");
fwrite($file,$problemMdTemplate);
fclose($file);

$file = fopen("$srcDir/Solution.php","w");
fwrite($file,$solutionPhpTemplate);
fclose($file);

$file = fopen("$testDir/SolutionTest.php","w");
fwrite($file,$solutionPhpTestTemplate);
fclose($file);
