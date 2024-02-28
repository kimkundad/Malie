@extends('layouts.template2')

    @section('title')
    นโยบายความเป็นส่วนตัว ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Koh Samui)
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
                    <h2>Privacy Policy</h2>
                    <p>Details regarding the management of personal data</p>
                </div>
                @else
                <div class="text text-center">
                    <h2>นโยบายความเป็นส่วนตัว</h2>
                    <p>รายละเอียดเกี่ยวกับการจัดการข้อมูลส่วนบุคคลรูปแบบหนึ่ง </p>
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
                <h3 class="text-uppercase">What is personal information?</h3>
                <br>

                <p>Personal data means information about an individual which enables that individual to be identified. whether directly or indirectly But it does not include information about the specific person who has passed away.</p>
                <br>

                <h3 class="text-uppercase">Nature of personal information we collect</h3>
                <br>
                <h6>We will collect the following personal information.</h6>
                <ul>
                    <li>Personally identifiable information such as name, age, nationality, date of birth, age</li>
                    <li>Contact information such as address, contact location, telephone number, email.</li>
                    <li>Account information such as payment details and bank account</li>
                    <li>Transaction information such as history of receiving various services Trading history</li>
                    <li>Personal information such as user account name, password, orders, and your interest in the various services of the service provider.</li>
                    <li>Technical information such as Google Analytics, computer location numbers (IP Address), login information Usage data and settings (log)</li>
                    <li>Marketing information such as your satisfaction with the services received. and opinions on the service of personnel</li>
                </ul>
                <h3 class="text-uppercase">Source of personal information</h3>
                <br>
                <h6>We receive personal information directly from you. We will collect your personal information from the process of providing services as follows.</h6>
                <ul>
                    <li>When you register an account to use our services. or when you submit a request to exercise various rights with us</li>
                    <li>When you subscribe to receive advertising media or marketing information from us.</li>
                    <li>From your willingness to complete the questionnaire.</li>
                    <li>From collecting information about your use of the platform through browser cookies.</li>
                    <li>From your inquiries or through email correspondence or Other communication channels such as telephone so that the service provider can contact you back.</li>
                    <li>When you click to buy services or products from us.</li>
                    <li>When you log into your account on our platform. or other related applications such as Facebook and Google</li>
                </ul>

                <h6>Purpose of data processing</h6>
                <ul>
                    <li>We store your personal information for the purpose of organizing the database for analysis. and offer benefits according to your interests </li>
                    <li>We store your personal information in order to process payments for services or products you purchase in the system.</li>
                    <li>We store your personal information for the purpose of receiving information after providing services, such as making inquiries. Expressing opinions after service or submitting complaints to service providers, etc.</li>
                    <li>We collect personal information to verify that you are the only person accessing your account.</li>
                    <li>We collect your personal information for market research and relationship management. Providing services and users </li>
                    <li>We collect your personal information to comply with legal requirements. and government regulations</li>
                    <li>We store your personal information in order to comply with regulations applicable to service providers. Including consent for the service provider to transfer personal data to the business group and partners of the service provider. data processor or any agency that has a contract with a service provider</li>
                </ul>

                <h6>When receiving personal information from you We will proceed as follows.</h6>
                <ul>
                    <li>Collected by recording in the computer system that uses the service, including Google Cloud Platform, Amazon AWS, Digital Ocean.</li>
                    <li>We will use your personal information collected in our operations for the purposes specified in the section. “Purpose of data processing”</li>
                    <li>We will disclose information to employees under contract with the company whose duties relate to the information. Disclosed on the company's platform or social media channels for advertising. 
                        In addition, we may need to send your personal information to credit bureaus for verification 
                        and may use the results of such verification for fraud prevention.</li>
                </ul>

                <h6>The controller maintains your personal data as follows:</h6>
                <ul>
                    <li>Personal information that we collect will be in the form of a soft copy.</li>
                    <li>Personal information is stored on our devices, including our computers and mobile phones, as well as on computer systems, including Google Cloud Platform, Amazon AWS, Digital Ocean.</li>
                    <li>Storage period according to topic “Period for processing personal data”</li>
                </ul>
                

            </div>
            @else
            <div class="term-condition">
                <h3 class="text-uppercase">ข้อมูลส่วนบุคคล คืออะไร?</h3>
                <br>

                <p>ข้อมูลส่วนบุคคล หมายถึง ข้อมูลเกี่ยวกับบุคคลซึ่งทำให้สามารถระบุตัวตนบุคคลนั้นได้ ไม่ว่าทางตรงหรือทางอ้อม แต่ไม่รวมถึงข้อมูลของผู้ถึงแก่กรรมโดยเฉพาะ</p>
                <br>

                <h3 class="text-uppercase">ลักษณะข้อมูลส่วนบุคคลที่เราเก็บรวบรวม</h3>
                <br>
                <h6>เราจะเก็บรวบรวมข้อมูลส่วนบุคคลดังต่อไปนี้</h6>
                <ul>
                    <li>ข้อมูลที่บ่งชี้ตัวตน อาทิ ชื่อ อายุ สัญชาติ วันเกิด อายุ</li>
                    <li>ข้อมูลช่องทางการติดต่อ อาทิ ที่อยู่ สถานที่ติดต่อ เบอร์โทร อีเมล</li>
                    <li>ข้อมูลบัญชี อาทิ รายละเอียดการชำระเงิน และบัญชีธนาคาร</li>
                    <li>ข้อมูลทางธุรกรรม อาทิ ประวัติการรับบริการต่างๆ ประวัติการซื้อขาย</li>
                    <li>ข้อมูลส่วนตัว อาทิ ชื่อบัญชีผู้ใช้ รหัสผ่าน การสั่งซื้อ ความสนใจของท่านที่มีต่อบริการต่างๆของผู้ให้บริการ</li>
                    <li>ข้อมูลทางเทคนิค อาทิ Google Analytics หมายเลขระบุตำแหน่งคอมพิวเตอร์ (IP Address) ข้อมูลการเข้าระบบ ข้อมูลการใช้งาน และ การตั้งค่า (log)</li>
                    <li>ข้อมูลทางการตลาด อาทิ ความพึงพอใจของท่านต่อบริการที่ได้รับ และความเห็นต่อการให้บริการของบุคลากร</li>
                </ul>
                <h3 class="text-uppercase">แหล่งที่มาของข้อมูลส่วนบุคคล</h3>
                <br>
                <h6>เราได้รับข้อมูลส่วนบุคคลของท่านจากช่องทาง ดังนี้</h6>
                <ul>
                    <li>เมื่อท่านลงทะเบียนบัญชีเพื่อใช้บริการกับเรา หรือเมื่อท่านยื่นคำร้องขอใช้สิทธิต่างๆ กับเรา</li>
                    <li>เมื่อท่านสมัครรับข้อมูลสื่อโฆษณาหรือข้อมูลด้านการตลาดจากเรา</li>
                    <li>จากความสมัครใจของท่านในการทำแบบสอบถาม</li>
                    <li>จากการเก็บข้อมูลการใช้แพลตฟอร์มของท่านผ่านบราวเซอร์คุกกี้</li>
                    <li>จากการติดต่อสอบถามของท่าน หรือผ่านการโต้ตอบทางอีเมลหรือ ช่องทางการสื่อสารอื่นๆ เช่น โทรศัพท์ เพื่อที่ผู้ให้บริการสามารถติดต่อท่านกลับได้</li>
                    <li>เมื่อท่านกดซื้อบริการหรือผลิตภัณฑ์จากเรา</li>
                    <li>เมื่อท่านเข้าสู่ระบบบัญชีผู้ใช้บนแพลตฟอร์มของเรา หรือแอพพลิเคชั่นอื่นๆที่เกี่ยวข้อง อาทิ เฟสบุ๊ค และ กูเกิ้ล</li>
                </ul>

                <h6>วัตถุประสงค์ในการประมวลผลข้อมูล</h6>
                <ul>
                    <li>เราจัดเก็บข้อมูลส่วนบุคคลของท่านเพื่อประโยชน์ในการจัดฐานข้อมูลในการวิเคราะห์ และเสนอสิทธิประโยชน์ตามความสนใจของท่าน</li>
                    <li>เราจัดเก็บข้อมูลส่วนบุคคลของท่านเพื่อการดำเนินการชำระเงินค่าบริการหรือสินค้าที่ท่านซื้อในระบบ</li>
                    <li>เราจัดเก็บข้อมูลส่วนบุคคลของท่านเพื่อวัตถุประสงค์ในการรับข้อมูลหลังการบริการ เช่น การสอบถามข้อมูล การแสดงความคิดเห็นหลังการบริการ หรือ การส่งคำร้องแก่ผู้ให้บริการ เป็นต้น</li>
                    <li>เราจัดเก็บข้อมูลส่วนบุคคลเพื่อยืนยันตัวตนว่าท่านเป็นผู้เดียวในการเข้าถึงบัญชีของท่าน</li>
                    <li>เราจัดเก็บข้อมูลส่วนบุคคลของท่านเพื่อวิจัยการตลาดและบริหารความสัมพันธ์ระหว่างผู้ ให้บริการและผู้ใช้บริการ</li>
                    <li>เราจัดเก็บข้อมูลส่วนบุคคลของท่านเพื่อปฏิบัติตามข้อกฎหมาย และระเบียบบังคับใช้ของรัฐ</li>
                    <li>เราจัดเก็บข้อมูลส่วนบุคคลของท่านเพื่อปฏิบัติตามกฎระเบียบที่ใช้บังคับกับผู้บริการ รวมถึงการยินยอมให้ผู้ให้บริการสามารถโอนข้อมูลส่วนบุคคลให้แก่กลุ่มธุรกิจและพันธมิตรของผู้ให้บริการ ผู้ประมวลผลข้อมูล หรือหน่วยงานใดๆที่มีสัญญากับผู้ให้บริการ</li>
                </ul>

                <h6>เมื่อได้รับข้อมูลส่วนบุคคลจากท่านแล้ว เราจะดำเนินการดังนี้</h6>
                <ul>
                    <li>เก็บรวบรวมโดยมีการบันทึกในระบบคอมพิวเตอร์ ที่ใช้บริการ ได้แก่ Google Cloud Platform, Amazon AWS, Digital Ocean</li>
                    <li>เราจะใช้ข้อมูลส่วนบุคคลของท่านที่ได้เก็บรวบรวมมาในการดำเนินของเราตามวัตถุประสงค์ที่ระบุไว้ในหัวข้อ “วัตถุประสงค์ในการประมวลผลข้อมูล”</li>
                    <li>เราจะเปิดเผยข้อมูลกับพนักงานภายใต้สัญญาจ้างของบริษัทที่มีขอบเขตหน้าที่เกี่ยวข้องกับข้อมูล 
                        เปิดเผยบนแพลตฟอร์มของบริษัท หรือช่องทางสังคมออนไลน์เพื่อการโฆษณา นอกจากนี้ 
                        เราอาจจำเป็นต้องส่งข้อมูลส่วนบุคคลของท่านไปยังหน่วยงานข้อมูลเครดิต เพื่อตรวจสอบ 
                        และอาจใช้ผลการตรวจสอบข้อมูลดังกล่าวเพื่อการป้องกันการฉ้อโกง</li>
                </ul>

                <h6>ผู้ควบคุมทำการเก็บรักษาข้อมูลส่วนบุคคลของท่าน ดังนี้</h6>
                <ul>
                    <li>ข้อมูลส่วนบุคคลที่ทางเราจัดเก็บจะอยู่ในลักษณะของ Soft Copy</li>
                    <li>เข้ามูลส่วนบุคคลจะถูกจัดเก็บไว้ในเครื่องมืออุปกรณ์ของเรา ได้แก่ คอมพิวเตอร์ โทรศัพท์มือถือ ของทางเรา รวมถึงมีการเก็บข้อมูลในบนระบบคอมพิวเตอร์ ซึ่งได้แก่ Google Cloud Platform, Amazon AWS, Digital Ocean</li>
                    <li>ระยะเวลาจัดเก็บ เป็นไปตามหัวข้อ “ระยะเวลาในการประมวลผลข้อมูลส่วนบุคคล”</li>
                </ul>
                

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