@extends('layouts.template2')

    @section('title')
    ข้อตกลงและเงื่อนไข ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Koh Samui)
    @stop

    @section('og')
    
    @stop('og')

    @section('stylesheet')

    <style>
        .center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
    </style>

    @stop('stylesheet')

    @section('content')


    <!-- SUB BANNER -->
    <section class="section-sub-banner bg-9">
        <div class="awe-overlay"></div>
        <div class="sub-banner">
            <div class="container">
                
                @if(session()->get('locale') == 'en')
                <div class="text text-center">
                    <h2>Terms and Conditions</h2>
                    <p>Terms of Use of Properties Pool Villa Malie Koh Samui (Villa Malie Koh Samui)</p>
                </div>
                @else
                <div class="text text-center">
                    <h2>เงื่อนไขและข้อตกลงทั่วไป</h2>
                    <p>ข้อตกลงการใช้บริการของ ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Koh Samui)</p>
                </div>
                @endif
            </div>

        </div>

    </section>
    <!-- END / SUB BANNER -->
    
    <!-- ABOUT -->
    <section class="section-about">
        <div class="container">

            @if(session()->get('locale') == 'en')
            <div class="term-condition">
                <h3 class="text-uppercase">General terms and conditions</h3>
                <br>

                <p>Website www.villamaliesamui.com This website (hereinafter referred to as the “Website”) is created by Villa Malie Koh Samui 
                    to provide information about online marketing. The user's use of the website is subject to the terms and conditions of this agreement. 
                    Therefore, users should study these terms and conditions and/or any other terms and conditions that we have notified on the website in 
                    detail before using the website. In this regard, by using this website, it is considered that the users accept and Agree to abide by all such terms and conditions. 
                    If the user does not wish to be bound by the terms and conditions. We kindly request service users to stop visiting and using this website. Effective from 1 January 2024</p>
                <br>

                <h3 class="text-uppercase">1.  Intellectual property</h3>
                <br>
                <p>You agree and accept that all information, text, images, sounds, logos and/or any part of this website, including but not limited to copyright, trademarks. Service marks, trade names, databases Trade secrets, patents, know-how, etc. displayed on the website are works protected by intellectual property laws, which are our copyright, rights and property.</p>
                <p>You agree and acknowledge that Our website is only a website to provide information about online marketing for users only. In the event of any legal dispute, you agree to waive your right to claim in any legal proceedings. whether civil or criminal against us</p>
                <br>

                <h3 class="text-uppercase">2. Using the service</h3>
                <br>
                <p>You agree and accept that You will use this website for personal gain or any other lawful purpose subject to the Terms. and this condition specified on this website only. and will not use this website for commercial or other benefits that are contrary to Laws and good morals of the people In addition, you agree that you will not do any of the following actions.</p>
                <p>a) Reproduce, republish, modify, download, upload, post, distribute, or make available to the public. which is wrong work legal or ethical without our prior written permission.</p>
                <p>b) Violate intellectual property rights such as copyrights and patents. trademark Trade secrets or other intellectual property as required by law, by any means.</p>
                <p>c) Download, upload, post, or do anything to illegally exploit any content or messages from this website without our prior written consent. and/or create a topic or make it appear that Messages that cause damage to us Internet service members and/or third parties</p>
                <p>d) Upload, post announcements, send emails or do any other actions that cause disruption or interference with the operation of the system. computer by sending viruses (Virus) or computer programs in various forms designed to hinder break the limit working of the computer system or computer hardware or software programs in our member communications or Internet service users or third parties</p>
                <p>e) Use computer software programs to prevent Interfering with our work or providing our services or third party computers and/or computer systems such as Use software programs such as Trojan Horses, viruses in the form of Time Bombs, etc.</p>
                <p>f) Do anything that is contrary to our notices or policies stated in these terms and conditions and/or amendments. Fill in the terms and conditions that we will announce or set later. If we know that you have taken any action that violates the Terms and conditions specified on this website We have the right to suspend service to you without prior notice and/or take legal action against you as we deem appropriate.</p>
                <br>

                <h6>3. Limitation of Liability</h6>
                <p>You agree and accept that Some of the information that appears on this website is written or made by Third parties or some users of the website which is not related and beyond our control We have no liability whatsoever. arising from such content or messages Whether it is damages, lawsuits, claims, or any infringement actions. in any civil or criminal, computer crime or liability. in legal matters which affect the equipment Computers, property, rights or any property related to you or third parties. Whether through contractual obligations, tort, or criminal liability. or by any other means This exemption from our liability includes errors from providing information and/or articles, transmitting information, or any actions of us, our business partners. Shared service providers or other internet service users</p>
                <br>

                <h3>4. Waiver of rights in content on the website</h3>
                <br>
                
                <p>Text, drawings or other information Some parts of the website are a collection of information from various sources. To provide information, knowledge and benefits to service users, we have made every effort to collect information that is accurate and up to date (updated) at all times. However, We do not guarantee the reliability, accuracy, and up-to-dateness of such information. You agree and accept that We have no authority to control the accuracy of all information on this website.</p><br>
                
                <h3>5. Amendments</h3>
                <br>
                <p>We reserve the right to amend, change, add, or delete any of these terms and conditions. specified on this website without having to notify in advance</p>

                <h3>6. Applicable law</h3>
                <br>
                <p>If any dispute arises resulting from our service As a result of this website, you and we agree to use Thai law. Resolve disputes regarding your use of services on this website. It is considered to be agreement and acceptance of the terms and conditions of this website and Your use of the service after the amendment has been made. Any future terms and conditions of our website will be deemed to be your acceptance of such amended terms and conditions of our website.</p>
                

            </div>
            @else
            <div class="term-condition">
                <h3 class="text-uppercase">เงื่อนไขและข้อตกลงทั่วไป</h3>
                <br>

                <p>เว็บไซต์ www.villamaliesamui.com (ซึ่งต่อไปนี้จะเรียกว่า “เว็บไซต์”) ถูกจัดทำขึ้นโดย ที่พักพูลวิลล่า Malie เกาะสมุย (“เรา”) 
                    เพื่อให้ข้อมูลเกี่ยวกับการตลาดออนไลน์ การใช้เว็บไซต์ของผู้ใช้บริการจะอยู่ภายใต้เงื่อนไขและข้อตกลงนี้ 
                    ดังนั้นผู้ใช้บริการจึงควรศึกษาเงื่อนไขและข้อตกลงฉบับนี้ และ/ หรือเงื่อนไขและข้อตกลงอื่นใดที่เราได้แจ้งให้ทราบบนเว็บไซต์โดยละเอียดก่อนการเข้าใช้เว็บไซต์ 
                    ทั้งนี้ การเข้าใช้เว็บไซต์นี้ให้ถือว่าผู้ใช้บริการยอมรับและตกลงที่จะปฏิบัติตามเงื่อนไขและข้อตกลงดังกล่าวทั้งหมด 
                    หากผู้ใช้บริการไม่ประสงค์ที่จะผูกพันตามเงื่อนไขและข้อตกลง ขอความกรุณาผู้ใช้บริการยุติการเข้าชมและใช้งานเว็บไซต์นี้ มีผลบังคับใช้ตั้งแต่ 1 มกราคม 2567</p>
                <br>

                <h3 class="text-uppercase">1. ทรัพย์สินทางปัญญา</h3>
                <br>
                <p>ท่านตกลงและยอมรับว่า บรรดาข้อมูล ข้อความ รูปภาพ เสียง โลโก้และ/หรือส่วนหนึ่งส่วนใดของเว็บไซต์นี้รวมถึงแต่ไม่จำกัด เฉพาะ ลิขสิทธิ์เครื่องหมายการค้า เครื่องหมายบริการชื่อทางการค้าฐานข้อมูล ความลับทางการค้า สิทธิบัตร โนว์ฮาว ฯลฯ ที่ปรากฏบนเว็บไซต์เป็นงานที่ได้รับความคุ้มครองตามกฎหมายทรัพย์สินทางปัญญาซึ่งเป็นกรรมสิทธิ์ลิขสิทธิ์สิทธิและทรัพย์สินของเรา

                    ท่านตกลงและรับทราบว่า เว็บไซต์ของเราเป็นเพียงเว็บไซต์ในการให้ข้อมูลเกี่ยวกับการตลาดออนไลน์สำหรับผู้ใช้บริการเท่านั้น ใน กรณีที่เกิดข้อพิพาทใดๆ ในทางกฎหมาย ท่านตกลงสละสิทธิเรียกร้องในการดำเนินคดีใดๆ ไม่ว่าทางแพ่งหรืออาญาต่อเรา</p>
                <br>

                <h3 class="text-uppercase">2. การใช้บริการ</h3>
                <br>
                <p>ท่านตกลงและยอมรับว่า ท่านจะใช้เว็บไซต์นี้เพื่อประโยชน์ส่วนตัวหรือวัตถุประสงค์ที่ถูกต้องตามกฎหมายภายใต้ข้อกำหนด และเงื่อนไขฉบับนี้ที่ระบุไว้ในเว็บไซต์นี้เท่านั้น และจะไม่ใช้เว็บไซต์นี้เพื่อประโยชน์ในทางการค้าหรือประโยชน์อื่นใดที่ขัดต่อ กฎหมายและศีลธรรมอันดีของประชาชน นอกจากนี้ท่านตกลงว่าจะไม่กระทำการอย่างใดอย่างหนึ่งดังต่อไปนี้</p>
                <p>ก) ทำซ้ำจัดพิมพ์ขึ้นใหม่ ดัดแปลง ดาวน์โหลด อัปโหลด ติดประกาศ เผยแพร่ หรือทำให้ปรากฏต่อสาธารณชน ซึ่งงานอันผิด กฎหมายหรือศีลธรรมโดยไม่ได้รับอนุญาตเป็นลายลักษณ์อักษรจากเราก่อนล่วงหน้า</p>
                <p>ข) กระทำละเมิดสิทธิในทรัพย์สินทางปัญญา เช่น ลิขสิทธิ์สิทธิบัตร เครื่องหมายการค้า ความลับทางการค้า หรือ ทรัพย์สิน ทางปัญญาอื่น ตามที่กฎหมายกำหนดไม่ว่าโดยวิธีการใด</p>
                <p>ค) ดาวน์โหลด อัปโหลด ติดประกาศ หรือกระทำการใดๆเพื่อแสวงหาประโยชน์โดยมิชอบจากเนื้อหา หรือข้อความ งานใดๆ จากเว็บไซต์นี้โดยปราศจากความยินยอมเป็นลายลักษณ์อักษรล่วงหน้าจากเรา และ/หรือตั้งกระทู้หรือทำให้ปรากฏซึ่ง ข้อความที่ก่อให้เกิดความเสียหายต่อเรา สมาชิกผู้ใช้บริการอินเทอร์เน็ต และ/หรือบุคคลภายนอก</p>
                <p>ง) อัปโหลด ติดประกาศ ส่งอีเมลหรือ ดำเนินการอื่นใดอันมีผลทำให้เป็นการรบกวนหรือแทรกแซงการทำงานของระบบ คอมพิวเตอร์โดยการส่งไวรัส (Virus) หรือโปรแกรมคอมพิวเตอร์ในรูปแบบต่างๆ ที่ออกแบบมาเพื่อขัดขวาง ทำลายจำกัดการ ทำงานของระบบคอมพิวเตอร์หรือ คอมพิวเตอร์ฮาร์ดแวร์หรือโปรแกรมซอฟต์แวร์ในการสื่อสารของสมาชิกของเราหรือ ผู้ใช้บริการอินเทอร์เน็ตหรือบุคคลภายนอก</p>
                <p>จ) ใช้โปรแกรมคอมพิวเตอร์ซอฟต์แวร์ขัดขวาง แทรกแซงการทำงานหรือให้บริการของเรา หรือเครื่องคอมพิวเตอร์และ/ หรือระบบคอมพิวเตอร์ของบุคคลภายนอกอาทิเช่น ใช้โปรแกรมซอฟต์แวร์ประเภทม้าโทรจัน (Trojan Horse) ไวรัสในรูปแบบ ของไทม์บอมส์ (Time Bombs) ฯลฯ</p>
                <p>ฉ) กระทำการใดๆอันขัดต่อประกาศหรือนโยบายของเราที่ระบุไว้ในข้อกำหนดและเงื่อนไขฉบับนี้และ/หรือการแก้ไขเพิ่ม เติมข้อกำหนดและเงื่อนไขที่เราจะประกาศหรือกำหนดขึ้นภายหลัง หากเราทราบว่าท่านดำเนินการอย่างหนึ่งอย่างใดอันเป็นการขัดต่อข้อกำหนด และเงื่อนไขที่กำหนดในเว็บไซต์นี้ เรามีสิทธิที่จะระงับการให้บริการแก่ท่านโดยไม่บอกกล่าวล่วงหน้าและ/หรืออาจดำเนินการในทางกฎหมายกับท่านตามที่เราเห็นสมควรได้ทันที</p>
                <br>

                <h6>3. การจำกัดความรับผิด</h6>
                <p>ท่านตกลงและยอมรับว่า บรรดาข้อมูลบางส่วนที่ปรากฏในเว็บไซต์นี้ข้อความดังกล่าวเป็นข้อความที่เขียนหรือทำขึ้นโดย บุคคลภายนอกหรือผู้ใช้บริการเว็บไซต์บางส่วน ซึ่งไม่เกี่ยวข้อง และอยู่เหนือความควบคุมของเรา เราไม่มีความรับผิดใดๆ ที่เกิดจากเนื้อหาหรือข้อความดังกล่าว ไม่ว่าจะเป็นความเสียหายการฟ้องร้อง เรียกร้อง หรือการกระทำละเมิดใดๆไม่ว่า ในทางแพ่งหรือทางอาญาอาชญากรรมทางคอมพิวเตอร์หรือความรับผิดใดๆ ในทางกฎหมายซึ่งมีผลกระทบต่ออุปกรณ์ คอมพิวเตอร์ทรัพย์สิน สิทธิหรือ ทรัพย์สินใดๆ ที่เกี่ยวข้องกับท่านหรือบุคคลภายนอก ไม่ว่าจะโดยความผูกพันตามสัญญา ละเมิด ความรับผิดทางอาญา หรือโดยประการอื่น ข้อยกเว้นความรับผิดของเราดังกล่าวนี้ให้รวมไปถึงความผิดพลาดจากการให้บริการข้อมูล และหรือ บทความ รับส่งข้อมูล หรือการกระทำการใดๆ ของเรา พันธมิตรทางธุรกิจของเรา ผู้ให้บริการร่วมหรือผู้ใช้บริการอินเทอร์เน็ตอื่นๆ</p>
                <br>

                <h3>4. ข้อสละสิทธิในเนื้อหาบนเว็บไซต์</h3>
                <br>
                
                <p>ข้อความ ภาพวาดหรือข้อมูลต่างๆ บนเว็บไซต์บางส่วนเป็นการรวบรวมข้อมูลจากแหล่งต่างๆ มาเพื่อเป็นข้อมูล ความรู้และ ประโยชน์แก่ผู้ใช้บริการซึ่งเราได้ใช้ความพยายามอย่างเต็มที่ในการรวบรวมข้อมูลต่างๆให้ถูกต้อง และทันสมัย (update) อยู่เสมออย่างไรก็ตาม เราไม่รับรองความน่าเชื่อถือ ความถูกต้อง และความทันสมัย (update) ของข้อมูลดังกล่าว ท่าน ตกลงและยอมรับว่า เราไม่มีอำนาจในการดูแลควบคุมความถูกต้องข้อมูลทั้งหมดบนเว็บไซต์นี้</p><br>
                
                <h3>5. การแก้ไขเพิ่มเติม</h3>
                <br>
                <p>เราขอสงวนไว้ซึ่งสิทธิในการแก้ไขเปลี่ยนแปลง เพิ่มเติม ตัดทอน บรรดาข้อกำหนดและเงื่อนไขใดๆ ที่ระบุไว้ในเว็บไซต์นี้ โดยไม่จำต้องบอกกล่าวล่วงหน้า</p>

                <h3>6. กฎหมายที่ใช้บังคับ</h3>
                <br>
                <p>หากเกิดข้อพิพาทใดๆ ที่เกิดจากการให้บริการของเรา อันเนื่องมาจากเว็บไซต์นี้ท่านและเราตกลงใช้กฎหมายไทยในการ ระงับข้อพิพาทการใช้บริการในเว็บไซต์นี้ของท่าน ถือเป็นการตกลงและยอมรับข้อกำหนดและเงื่อนไขของเว็บไซต์ฉบับนี้และ การที่ท่านใช้บริการภายหลังจากการมีการแก้ไขเพิ่มเติม ข้อกำหนดและเงื่อนไขของเว็บไซต์ฉบับนี้ของเราในอนาคตย่อมถือว่าท่านยอมรับข้อกำหนดและเงื่อนไขของเว็บไซต์ของเราที่ได้มีการแก้ไขเพิ่มเติมดังกล่าว</p>
                

            </div>
            @endif

        </div>
    </section>
    <!-- END / ABOUT -->
    


    @endsection

    @section('scripts')
    
        <script>
    
        </script>
    
    @stop('scripts')