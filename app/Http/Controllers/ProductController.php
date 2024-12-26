<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class ProductController extends Controller
{

    //รายการสินค้า
    private $products = [
        [
            'id' => 1,
            'name' => 'Powder Kiss Lipstick',
            'description' => 'ขึ้นชื่อว่าเป็นแบรนด์ลิปสติกติดทนอันดับหนึ่งสำหรับสาว ๆ เลยก็ว่าได้สำหรับ M.A.C แบรนด์เมคอัปชื่อดังจากอเมริกาที่มาพร้อมสีสันคุณภาพในราคาที่ไม่แรง และครั้งนี้เขากลับมากับลิปสติกเนื้อแมทเวลเว็ตนุ่มนวล Powder Kiss Lipstick ใครที่ไม่ชอบลิปสติกเนื้อแมทแบบเดิม ๆ ที่มักจะแห้งและเกลี่ยได้ยาก ขอแนะนำรุ่นนี้เลย เพราะเขาเป็นสูตรลิปสติกเนื้อแมทที่มอบความแมทแบบชุ่มชื้น ให้ความรู้สึกเบาบาง ไม่แห้งผาก ทำให้ลิปสติกแมทที่ให้สีชัด มีความนุ่ม มีความฟุ้งละมุน และติดทนนาน ไม่ต้องคอยเติมให้ยุ่งยาก มีให้เลือกกันถึง 22 เฉดสีกัน แต่สีที่ได้รับเสียงตอบรับดีเป็นพิเศษ ต้องขอยกให้ สี Mull It Over ที่มีความเป็นนู้ดตุ่น ๆ ผสมกับพีช และเป็นอีกหนึ่งลิปสติกยี่ห้อไหนดี 2022 ที่เราแนะนำ',
            'price' => '2,000',
            'image' => 'https://sdcdn.io/mac/th/mac_sku_S4K029_1x1_0.png?width=1440&height=1440'
        ],
        [
            'id' => 2,
            'name' => 'Rouge Dior Lipstick',
            'description' => 'หากพูดถึงรีวิวลิปสติกเมคอัปเคาท์เตอร์แบรนด์คงพลาดไม่ได้เลยที่จะไม่พูดถึง Dior แฟชั่นแบรนด์เก่าแก่จากฝรั่งเศษที่สาว ๆ คุ้นเคย ที่ปล่อยลิปสติกติดทนอย่าง Rouge Dior ออกมา ตำนานลิปที่มีเฉดสีเยอะมากที่สุด เหมาะกับทุกโทนสีผิว เป็นลิปที่มีสารสกัดจากดอกไม้อย่างแท้จริง อุดมด้วยสารสกัดจากดอกโบตั๋นสีแดงและดอกทับทิมจากแหล่งกำเนิดตามธรรมชาติ มาพร้อมเม็ดสีที่ติดทนนานถึง 16 ชั่วโมง มอบสัมผัสที่เบาสบาย แพคเกจมีความทันสมัยและหรูหราหมาเห่าดังเช่นเคย ส่วนเฉดสีที่เป็นไอคอนของลิปสติกรุ่นนี้ต้องยกให้ Dior Matte Lipstick Couture Colour Comfort & Wear Lipstick 999 เนื้อแมทโทนส้ม ๆ ที่แอบให้ความเซ็กซี่ ขี้เล่น ได้ลุคที่ปังปั๊วะกว่าที่คิด!',
            'price' => '1,990',
            'image' => 'https://th.ozcosmetics.com/syimages/202104/261391.jpg'
        ],
        [
            'id' => 3,
            'name' => ' Rouge Allure Luminous Intense Lip Colour',
            'description' => 'เป็นอีกหนึ่งแฟชั่นแบรนด์จากฝรั่งเศสที่สาว ๆ หลงใหล กับ Chanel ที่แค่เห็นแวบตาเดียวก็รู้ว่าความเรียบหรูดูแพงนี้ต้องเป็น Rouge Allure Luminous Intense Lip Colour ลิปสติกเนื้อสัมผัสซาติน ที่มอบความมีชีวิตชีวาและเปล่งประกาย ด้วยเนื้อสัมผัสบางเบาเป็นพิเศษ ซึมซาบสู่ริมฝีปากอย่างรวดเร็ว ความเข้นข้นสูงของพิกเมนต์สีอณูเล็กพิเศษ เป็นลิปสติกติดทนที่มอบเฉดสีเด่นชัดแม้ทาเพียงครั้งแรก ผสานการบำรุงจากสารสกัดธรรมชาติอย่าง Green tea, Sweet Almond Oil และ Adherent Ester เพื่อมอบความชุ่มชื้นให้ริมฝีปากดูเปล่งประกายสุขภาพดี อีกทั้งยังติดทนนานและปกป้องสีสันให้สม่ำเสมอ แอบมีกลิ่นหอมสไตล์ชาแนล แพ็คเกจสวยฟาด วัสดุแข็งแรง พกพาได้สะดวกแบบไม่ต้องกลัวแตก',
            'price' => '1,890',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLYSLaOUy9SAVPc5cp_JoaGWpUPzqIvwqVXFdYkFg1x7sqODnTx-xx_9VBM_YumkdOdMo&usqp=CAU'
        ],
        [
            'id' => 4,
            'name' => 'Crushed Lip Color',
            'description' => 'ลิปสติกรุ่นใหม่ที่จะช่วยแต่งแต้มริมฝีปากให้ดูราวกับเพิ่งผ่านการจุมพิต (The Just-Kissed Stain Effect) พร้อมมอบความชุ่มชื่นและคุณค่าบำรุงจากวิตามิน E, C และขี้ผึ้งคุณภาพสูง ติดทนนานได้สูงสุดถึง 8 ชั่วโมงโดยไม่เป็นคราบหรือจืดจางระหว่างวัน',
            'price' => '1,549',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj06Of1Zcb-22rPXPjKx70LgPtjfzTI70FQA&s'
        ],
        [
            'id' => 5,
            'name' => 'Superstay Matte Ink',
            'description' => 'ลิควิดลิปสติก สีลิปติดทนนาน 16 ชั่วโมง ไม่ตกร่อง มาพร้อมแอพพลิเคเตอร์หัวแปรงรูปทรงไดมอนด์ปลายเรียว ช่วยให้เข้าถึงมุมปากได้ง่ายและแม่นยำกว่าที่เคย ลิปจิ้มจุ่มติดทนนาน 16 ชั่วโมง ไม่ติดมาสก์ เนื้อแมทบางเบา ไม่หนักปาก ไม่ตกร่อง',
            'price' => '1,800',
            'image' => 'https://medias.watsons.co.th/publishing/WTCTH-BP_278246-front-zoom.jpg'
        ],
        [
            'id' => 6,
            'name' => 'Harder Liquid Matte Lipstick',
            'description' => 'ไม่ตกร่อง สีสวยชัด เกลี่ยง่าย สีเนียนแน่น กลบสีปากมิด เบลอร่องปากเนียนสนิท ฟินิชปากแมทสวยเซ็กซี่ ทาได้ทั้งแบบ BOLD or BLUR or BLEND. ติดทนทั้งวัน มีวิตามินบำรุงปากให้เนียนนุ่ม ชุ่มชื้น ถึงปากจะแมทแต่ไม่แห้งแตกแน่นอน',
            'price' => '1,559',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvO2z-kO6sUK8GGyC0rxse-kEw7OmZbsJJ0g&s'
        ],
        [
            'id' => 7,
            'name' => 'Glow Ink Color Mini',
            'description' => 'ลิปทิ้นท์เนื้อกึ่งกลอส กึ่งสเตน ทาแล้วปากฉ่ำวาวโกลว์อวบอิ่มดูสุขภาพดี ด้วยนวัตกรรมใหม่ สูตรเบสเป็นน้ำ ห่อหุ้มน้ำมันไว้ภายใน พร้อมช่วยบำรุงริมฝีปากให้ชุ่มชื้นยาวนาน ไม่ทำให้ปากแห้ง สาว ๆ ที่มีริมฝีปากแห้งก็สามารถทาได้สบาย ๆ',
            'price' => '1,200',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQgVymLyqC3LE2LTXF9vOcqG9DPxXQGyu35g&s'
        ],
        [
            'id' => 8,
            'name' => 'Soft Matte Lipstick',
            'description' => 'Soft Matte Finish: ฟินิชซอฟต์แมตต์ เม็ดสีแน่นชัด ติดทนนาน กลบริมฝีปากคล้ำได้อย่างแนบเนียน
            Light As Air: เนื้อครีมนุ่มลื่น ให้ความรู้สึกเบาสบายเหมือนไม่ได้ทา
            Long-wear Hydrating: มอบความชุ่มชื้นให้ริมฝีปาก เกลี่ยง่าย ไม่แห้งเป็นขุย ไม่ตกร่อง',
            'price' => '1,999',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIFuXXT0zTL7j3XA3I9ynZA3YhbC8TelOv3Q&s'
        ],
        [
            'id' => 9,
            'name' => 'Ultra HD Matte Lipcolor',
            'description' => 'ลิควิดลิปเนื้อแมตต์บางเบา เม็ดสีสวยคมชัด เรียวปากสวยเรียบเนียนดุจกำมะหยี่ พร้อมบำรุงด้วยมอยเจอร์ไรเซอร์ ให้ริมฝีปากเนียนนุ่มชุ่มชื่นยาวนาน เนื้อแมท ให้สีสดคมชัด เรียวปากสวยเรียบเนียน ทาลิปสติกให้ทั่วริมฝีปากตามต้องการ',
            'price' => '1,500',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzZAXoKiUWd_bqLfjgYk_hs_4IfHhjnCg8zQ&s'
        ],
        [
            'id' => 10,
            'name' => 'Rouge Volupté Shine Oil-in-stick',
            'description' => 'YSL เป็นแฟชั่นแบรนด์จากฝรั่งเศสอีกหนึ่งเจ้าที่ไม่ว่าออกไอเท็มอะไรมาก็มักจะได้รับความสนใจจากสาว ๆ เสมอ และนี่เป็นลิปสติกติดทนอีกหนึ่งรุ่นที่สร้างชื่อเสียงให้กับแบรนด์ YSL มายาวนาน กับ Rouge Volupté Shine Oil-in-stick ที่มาในรูปแบบแท่งสีทองหรูหรา แต่ยังคงความคลาสสิกไว้ได้เป็นอย่างดี เนื้อลิปจะเป็นแบบมันวาว สีแน่น เวลาทาไม่จำเป็นต้องลงลิปมันหรือลิปปาล์มก่อนเลย เพราะเนื้อลิปจะมีความลื่น ๆ แบบกลอสครีม สามารถเติมความชุ่มชื้นให้ปากได้เป็นอย่างดี ทาแล้วไม่ตกร่อง แต่ทำให้ปากดูเรียบเนียนขึ้น บอกเลยว่ารุ่นนี้ได้รับผลตอบรับอันล้นหลามจากหลาย ๆ คน เพราะมีเนื้อสัมผัสเรียบลื่นเกลี่ยได้ง่าย ถูกใจสาวกคนปากแห้งสุด ๆ เพราะไม่ต้องทาลิป เติมลิปหลายขั้นตอน ใครลังเลไม่รู้จะซื้อลิปสติกยี่ห้อไหนดี 2022 เราขอเทใจให้รุ่นนี้เลย!',
            'price' => '1,390',
            'image' => 'https://m.media-amazon.com/images/I/51CbK0QjTjL._SL1000_.jpg'
        ],
        [
            'id' => 11,
            'name' => 'Glory glowy glow gloss tint',
            'description' => 'ลิปทินท์เนื้อพุดดิ้ง เนื้อฉ่ำเย็นสดชื่น มี Berry Extract ช่วยให้ริมฝีปากดูอวบอิ่มสุขภาพดี พร้อม Tremella Mushroom Extract เติมเต็มความชุ่มชื้นล้ำลึก เหมาะกับการแต่งหน้าในทุกลุค ทาแบบสีระเรื่อ Ombre เป็นธรรมชาติหรือบิ้วเพิ่มให้เข้มขึ้นได้อีกตามความต้องการ ให้ Fell ไม่หนักปาก ไม่เป็นคราบ สีลิปสติกมีความโกลวเงาสวยเล่นแสงเป็นเอกลักษณ์ของเค้าเลย แถมใช้ได้กับทุกสีผิว',
            'price' => '1,000',
            'image' => 'https://medias.watsons.co.th/publishing/WTCTH-BP_309887-front-zoom.jpg'
        ],
        [
            'id' => 12,
            'name' => 'IN2IT moisture bomb lipstick',
            'description' => 'ลิปบาล์มที่กำลังมาแรงเป็นกระแสในโลกออนไลน์ตอนนี้คงหนีไม่พ้น IN2IT รุ่นนี้เลย ด้วยสีสันของเบอร์ 05 ที่คล้ายลิปสติกตัวดังอย่าง Dior ทำเอาหลายคนรีบไปหาซื้อใช้ตามจนขาดตลาด เนื้อฉ่ำเติมความชุ่มชื้นยาวนาน สวยทุกสี ให้ลุคใสๆ ริมฝีปากสวยหรูดูแพง',
            'price' => '1,500',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-i0mv9kTIrIdeRGP2E39WvVaubpcuiIi3Tw&s'
        ],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {     return Inertia::render('Products/Index', ['products' => $this->products]); }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {     $product = collect($this->products)->firstWhere('id', $id);     if (!$product) {         abort(404, 'Product not found');     }     return Inertia::render('Products/Show', ['product' => $product]); }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
