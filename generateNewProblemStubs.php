<?php declare(strict_types=1);

if (!isset($argv[1])) {
    echo 'Solution Name required, please follow the format A000Template';
    return;
}

$problemName = $argv[1];
$parts = explode($problemName,' ');
$problemName = '';
foreach($parts as $index => $name) {
    $name = strtolower($name);
    if ($index !== 0) {
        $name = ucfirst($name);
    }
    $problemName .= str_replace('.','', $name);
}
$problemName = "A$problemName";
if (empty($problemName)) {
    echo 'Solution Name required, please follow the format A000Template';
    return;
}
$srcDir = "./src/$problemName";
$testDir = "./tests/$problemName";

mkdir($srcDir);
mkdir($testDir);

$problemMdTemplate = <<<'EOT'
## 0000. Sample

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

namespace App\\$problemName;

class Solution {
    
    public function sample(): void {
        return;
    }
}
EOT;

$solutionPhpTestTemplate = <<<EOT
<?php declare(strict_types=1);

namespace App\\$problemName;
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
echo fwrite($file,$problemMdTemplate);
fclose($file);

$file = fopen("$srcDir/Solution.php","w");
echo fwrite($file,$solutionPhpTemplate);
fclose($file);

$file = fopen("$testDir/SolutionTest.php","w");
echo fwrite($file,$solutionPhpTestTemplate);
fclose($file);
