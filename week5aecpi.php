<?php

/**
 * Class Ingredient
 * เก็บข้อมูลวัตถุดิบแต่ละตัว (ชื่อ, ปริมาณ, หน่วย)
 */
class Ingredient 
{
    private string $name;
    private float $amount;
    private string $unit;

    public function __construct(string $name, float $amount, string $unit) 
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->unit = $unit;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getAmount(): float 
    {
        return $this->amount;
    }

    public function getUnit(): string 
    {
        return $this->unit;
    }
}

/**
 * Class Recipe
 * เก็บข้อมูลสูตรอาหารแต่ละเมนู
 */
class Recipe 
{
    private string $name;
    /** @var Ingredient[] */
    private array $ingredients = [];

    public function __construct(string $name) 
    {
        $this->name = $name;
    }

    public function addIngredient(string $name, float $amount, string $unit): void 
    {
        $this->ingredients[] = new Ingredient($name, $amount, $unit);
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getIngredients(): array 
    {
        return $this->ingredients;
    }
}

/**
 * Class RecipeManager
 * คลังเก็บสูตรอาหารทั้ง 6 เมนู
 */
class RecipeManager 
{
    /** @var Recipe[] */
    private array $recipes = [];

    public function __construct() 
    {
        $this->initRecipes();
    }

    private function initRecipes(): void 
    {
        
        $r1 = new Recipe('สูตรคั่วพริกเกลือ');
        $r1->addIngredient('รากผักชีสับละเอียด', 5, 'ราก');
        $r1->addIngredient('กระเทียมสับ', 5, 'กลีบ');
        $r1->addIngredient('พริกขี้หนูสับหยาบ', 10, 'เม็ด');
        $r1->addIngredient('เกลือ', 0.5, 'ช้อนชา');
        $r1->addIngredient('ผงปรุงรส', 1, 'ช้อนโต๊ะ');
        $r1->addIngredient('ผักชีซอย', 1, 'ต้น');
        $this->recipes[] = $r1;

       
        $r2 = new Recipe('สูตรกะเพราแห้ง');
        $r2->addIngredient('พริกสด', 6, 'เม็ด');
        $r2->addIngredient('กระเทียมกลีบเล็ก', 2, 'ช้อนโต๊ะ');
        $r2->addIngredient('น้ำมันพืช', 2, 'ช้อนโต๊ะ');
        $r2->addIngredient('พริกไทยป่น', 1, 'ช้อนชา');
        $r2->addIngredient('ผงปรุงรส', 0.5, 'ช้อนชา');
        $r2->addIngredient('น้ำตาลทราย', 1, 'ช้อนโต๊ะ');
        $r2->addIngredient('ซอสหอยนางรม', 1, 'ช้อนโต๊ะ');
        $r2->addIngredient('ซอสปรุงรส', 0.5, 'ช้อนโต๊ะ');
        $r2->addIngredient('ใบกะเพรา', 1, 'กำมือ (ตามชอบ)');
        $this->recipes[] = $r2;

       
        $r3 = new Recipe('สูตรผัดกระเทียมพริกไทย');
        $r3->addIngredient('กระเทียม', 0.5, 'ถ้วยตวง');
        $r3->addIngredient('น้ำมันหอย', 1, 'ช้อนโต๊ะ');
        $r3->addIngredient('ซีอิ๊วขาว', 2, 'ช้อนโต๊ะ');
        $r3->addIngredient('น้ำตาล', 1, 'ช้อนชา');
        $r3->addIngredient('น้ำมัน', 1, 'ช้อนโต๊ะ');
        $r3->addIngredient('พริกไทย', 1, 'หยิบมือ (โรยหน้า)');
        $r3->addIngredient('ผักชี', 1, 'ต้น (สำหรับแต่งหน้า)');
        $this->recipes[] = $r3;

        $r4 = new Recipe('สูตรผัดขี้เมา');
        $r4->addIngredient('พริกไทยสด', 2.5, 'พวง');
        $r4->addIngredient('พริกขี้ฟ้าแดง', 4, 'เม็ด');
        $r4->addIngredient('กระเทียมสับ', 4, 'กลีบ');
        $r4->addIngredient('ข้าวโพดอ่อน', 5, 'ฝัก');
        $r4->addIngredient('ใบมะกรูด', 5, 'ใบ');
        $r4->addIngredient('ใบกะเพรา', 1, 'กำมือ');
        $r4->addIngredient('น้ำตาลทราย', 0.5, 'ช้อนโต๊ะ');
        $r4->addIngredient('น้ำมันหอย', 1, 'ช้อนโต๊ะ');
        $r4->addIngredient('น้ำเปล่า', 0.5, 'ช้อนโต๊ะ');
        $r4->addIngredient('น้ำมันพืช', 1, 'ช้อนโต๊ะ');
        $this->recipes[] = $r4;

        
        $r5 = new Recipe('สูตรผัดผงกะหรี่');
        $r5->addIngredient('ผงกะหรี่', 2, 'ช้อนโต๊ะ');
        $r5->addIngredient('น้ำพริกเผา', 1.5, 'ช้อนโต๊ะ');
        $r5->addIngredient('กระเทียมสับ', 1, 'ช้อนโต๊ะ');
        $r5->addIngredient('ซอสปรุงรส', 0.5, 'ช้อนโต๊ะ');
        $r5->addIngredient('น้ำตาลทราย', 1, 'ช้อนโต๊ะ');
        $r5->addIngredient('ซีอิ๊วขาว', 1, 'ช้อนโต๊ะ');
        $r5->addIngredient('ซอสเห็ดหอม', 3, 'ช้อนโต๊ะ');
        $r5->addIngredient('นมข้นจืด', 0.25, 'ถ้วยตวง');
        $r5->addIngredient('น้ำเปล่า', 0.25, 'ถ้วยตวง');
        $r5->addIngredient('น้ำมันพืช', 1, 'ช้อนโต๊ะ');
        $this->recipes[] = $r5;

        
        $r6 = new Recipe('สูตรผัดพริกแกง');
        $r6->addIngredient('ถั่วฝักยาวหั่น', 1, 'ถ้วย');
        $r6->addIngredient('น้ำมันพืช', 2, 'ช้อนโต๊ะ');
        $r6->addIngredient('น้ำพริกแกงเผ็ด', 1.5, 'ช้อนโต๊ะ');
        $r6->addIngredient('น้ำปลา', 1, 'ช้อนโต๊ะ');
        $r6->addIngredient('น้ำตาลทราย', 0.5, 'ช้อนโต๊ะ');
        $r6->addIngredient('ใบมะกรูดซอย', 3, 'ใบ');
        $r6->addIngredient('พริกชี้ฟ้าแดง', 1, 'เม็ด (ตกแต่ง)');
        $this->recipes[] = $r6;
    }

    public function getRecipes(): array 
    {
        return $this->recipes;
    }
}

// ==========================================
// ส่วนการประมวลผลและการแสดงผล (สำหรับ 1 จาน)
// ==========================================

$manager = new RecipeManager();
$recipes = $manager->getRecipes();

echo "<pre style='font-family: monospace; font-size: 14px; line-height: 1.6;'>";

echo "==========================================================\n";
echo "           สูตรอาหารตามสั่งทั้ง 6 เมนู (สำหรับ 1 จาน)\n";
echo "==========================================================\n\n";

foreach ($recipes as $index => $recipe) {
    echo ($index + 1) . ". " . $recipe->getName() . "\n";
    echo "----------------------------------------------------------\n";

    foreach ($recipe->getIngredients() as $ing) {
        $amount = $ing->getAmount();
        $unit = $ing->getUnit();

        // จัดรูปแบบตัวเลข ถ้าเป็นทศนิยมให้แสดง เช่น 0.5 หรือ 2.5
        $strAmount = (fmod($amount, 1) !== 0.0) ? sprintf("%.2f", $amount) : sprintf("%d", $amount);

        echo sprintf(" - %-25s : %s %s\n", $ing->getName(), $strAmount, $unit);
    }
    echo "\n";
}

echo "==========================================================\n";
echo "</pre>";