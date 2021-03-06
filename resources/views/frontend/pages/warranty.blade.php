@extends('frontend.layouts.master')

@section('title','Giới thiệu')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Trang chủ<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Chính sách đổi trả</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	
	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="about-content">
							<h2
                                style="color: rgb(34, 34, 34); width: 1050px; margin-bottom: 0.5em; text-rendering: optimizespeed; font-size: 1.6em; line-height: 1.3; font-family: Arial, Tahoma, sans-serif; font-weight: 700;">
                                Quy dịnh bảo hành tại SmartDevice Shop</h2>
                            <p
                                style="margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                Những sản phẩm được bán trên&nbsp;<span style="font-weight: bolder;">SmartDevice Shop
                                    </span>&nbsp;đều là hàng mới 100%, mua trực tiếp chuyển về từ US, Trung Quốc,
                                Sing nên đảm bảo chất lượng chuẩn.&nbsp;<span style="font-weight: bolder;"><em>Ngoài ra các
                                        Sản phẩm Philips Hue, Philips WiZ, Sensibo đều là hàng chính hãng phân phối tại Việt
                                        Nam</em></span>&nbsp;nên có thể xuất VAT. Các sản phẩm khác vui lòng liên hệ để được
                                tư vấn.</p>
                            <p
                                style="margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                Với số lượng sản phẩm dồi dào, khả năng kỹ thuật tốt nên chúng tôi rất tự tin về chế độ bảo
                                hành của mình. Những sản phẩm bán ra đều có thời gian bảo hành 6 tháng đến hai (02) năm.
                                Thông tin ghi rõ ràng trên trang giới thiệu sản phẩm. Không như những bên khác mập mờ thông
                                tin này, không bảo hành, hoặc bảo hành với thời gian rất ngắn. Quy định về bảo hành gồm:</p>
                            <ol
                                style="list-style-position: initial; list-style-image: initial; padding: 0px; margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;"><a
                                        href="http://smartdeviceshop.loc/product-brand/bkav" target="_blank"
                                        rel="noreferrer noopener"
                                        style="touch-action: manipulation; color: rgb(2, 136, 209);">Thiết bị BKAV</a>: 06 tháng đến 1 Năm tùy sản phẩm (thời hạn bảo hành được ghi chú tại
                                    mỗi trang SP)</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Philips Hue Gen 3th/Xách tay: 1 Năm
                                    (thời hạn bảo hành được ghi chú tại mỗi trang SP)</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;"><a
                                        href="http://smartdeviceshop.loc/product-brand/lumi" target="_blank"
                                        rel="noreferrer noopener"
                                        style="touch-action: manipulation; color: rgb(2, 136, 209);">Lumi Chính Hãng
                                        Phân Phối Việt Nam</a>: 2 Năm (thời hạn bảo hành được ghi chú tại mỗi trang SP)</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;"><a
                                        href="http://smartdeviceshop.loc/product-brand/wesmart" target="_blank"
                                        rel="noreferrer noopener"
                                        style="touch-action: manipulation; color: rgb(2, 136, 209);">Thiết bị Wesmart</a>: 6 Tháng với các thiết bị ngoài trời và 1 Năm với các thiết bị khác
                                </li>
                            </ol>
                            <p
                                style="margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                Khách hàng mua hàng tại SmartDevice Shop đều được bảo hành điện tử bới SDT đã đăng kí. Do đó,
                                quý khách có thể kiểm tra thời hạn bảo hành bất cứ lúc nào.</p>
                            <h2
                                style="color: rgb(34, 34, 34); width: 1050px; margin-bottom: 0.5em; text-rendering: optimizespeed; font-size: 1.6em; line-height: 1.3; font-family: Arial, Tahoma, sans-serif; font-weight: 700;">
                                ĐIỀU KIỆN BẢO HÀNH</h2>
                            <p
                                style="margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                Thông thường các thiết bị tại SmartDevice Shop sẽ được&nbsp;<span
                                    style="font-weight: bolder;">đổi mới 1 đổi 1 trong suốt thời gian bảo
                                    hành</span>&nbsp;nếu đó là lỗi do NSX. Với các thiết bị có thể sửa chữa được, cần đảm
                                bảo các lưu ý dưới đây:</p>
                            <ol
                                style="list-style-position: initial; list-style-image: initial; padding: 0px; margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Tất cả các linh kiện, thiết bị phải có
                                    hóa đơn bán hàng của SmartDevice Shop và&nbsp;hóa đơn bán hàng phải không có dấu hiệu hư
                                    hại.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Mã vạch seri number phải còn nguyên
                                    vẹn, không có dấu hiệu cạo sửa, tẩy xóa hay bị rách mờ.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Tất cả sản phẩm có serial number vui
                                    lòng giữ lại hộp và đầy đủ phụ kiện, nếu không đủ&nbsp;<span
                                        style="font-weight: bolder;">SmartDevice Shop</span>&nbsp;có quyền từ chối bảo hành.
                                </li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Phụ kiện đi kèm theo máy bảo hành 03
                                    tháng.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Những hư hỏng của thiết bị được xác
                                    định do lỗi kỹ thuật hoặc lỗi của nhà sản xuất.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Đối với các linh kiện, thiết bị được
                                    cấp phiếu bảo hành chính hãng kèm từ nhà phân phối hoặc nhà sản xuất và có trung tâm bảo
                                    hành tại Việt Nam, trên phiếu sẽ ghi rõ điều kiện bảo hành của từng nhà sản xuất và nhà
                                    phân phối. (Nếu sản phẩm đó được phân phối trực tiếp tại Việt Nam mà không phải do SmartDeviceShop 
                                    phân phối). Việc chấp nhận được bảo hành hay không là do phía nhà phân phối hoặc
                                    trung tâm bảo hành uỷ quyền tại Việt Nam quyết định. SmartDevice Shop sẽ là đại diện của
                                    khách hàng, hỗ trợ khách hàng báo cáo về các lỗi gặp phải để bảo vệ quyền lợi của khách
                                    hàng.</li>
                            </ol>
                            <p
                                style="margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                <em>SmartDeviceShop luôn cung cấp hóa đơn bán hàng kiêm phiếu bảo hành cho khách hàng. Trong
                                    trường hợp khách bị mất hóa đơn, có thể cung cấp SDT đã mua hàng để được kiểm tra tình
                                    trạng và thời hạn bảo hành.</em></p>
                            <h2
                                style="color: rgb(34, 34, 34); width: 1050px; margin-bottom: 0.5em; text-rendering: optimizespeed; font-size: 1.6em; line-height: 1.3; font-family: Arial, Tahoma, sans-serif; font-weight: 700;">
                                ĐIỀU KIỆN KHÔNG BẢO HÀNH</h2>
                            <ol
                                style="list-style-position: initial; list-style-image: initial; padding: 0px; margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Máy hoặc thiết bị có dấu hiệu dung
                                    dịch lạ hoặc có nước vào.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Đối với các sản phẩm có ghi chống
                                    nước.&nbsp;<span style="font-weight: bolder;">SmartDevice Shop</span>&nbsp;không chịu trách
                                    nhiệm việc vào nước trong bất kỳ điều kiện nào và hoàn toàn có quyền từ chối bảo hành.
                                    Những trường hợp vào nước SmartDevice Shop sẽ hỗ trợ sửa chữa tính phí (Nếu sửa được)</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Máy hoặc thiết bị do va chạm hoặc đã
                                    bị rơi rớt, bể mẻ, móp méo, biến dạng, trầy xước, vết ẩm ướt, gỉ sét, phù tụ.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Màn hình thiết bị của máy bị hư hại
                                    không nằm trong điều kiện được bảo hành.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Các nút bấm vật lý không còn hoạt
                                    động.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Thiết bị có dấu hiệu cháy nổ, chuột
                                    bọ, côn trùng xâm nhập hoặc được sử dụng trong môi trường ẩm ướt.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Thiết bị hư hỏng do mất hệ điều hành.
                                </li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Thiết bị hư hỏng do thiên tai hỏa
                                    hoạn, sử dụng nguồn điện không ổn định hoặc do lắp đặt, vận chuyển, sử dụng không đúng
                                    quy cách, thiết bị bị đứt mạch, cháy phù, nám .v.v…</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Các trường hợp bàn phím của máy bị
                                    bong phím, gãy chấu, bể, vỡ .v.v…</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Không bảo hành các thiết bị phụ kiện
                                    như: bộ sạc, tai nghe, cable nối, vỏ máy, nút công tắc, dây điện, remote điều khiển, sản
                                    phẩm tặng kèm theo chương trình khuyến mãi.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Không chịu trách nhiệm bảo hành dữ
                                    liệu có chứa trong thiết bị lưu trữ của khách hàng khi bảo hành thiết bị.</li>
                            </ol>
                            <h2
                                style="color: rgb(34, 34, 34); width: 1050px; margin-bottom: 0.5em; text-rendering: optimizespeed; font-size: 1.6em; line-height: 1.3; font-family: Arial, Tahoma, sans-serif; font-weight: 700;">
                                PHƯƠNG THỨC BẢO HÀNH</h2>
                            <ol
                                style="list-style-position: initial; list-style-image: initial; padding: 0px; margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Tất cả các thiết bị được bảo hành miễn
                                    phí trong suốt thời hạn bảo hành.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Hàng mới mua trong vòng 15 ngày sẽ
                                    được đổi ngay hàng mới nếu việc kiểm tra hàng đó hư hỏng do lỗi của nhà sản xuất.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Trong trường hợp không có hàng mới để
                                    đổi thì sẽ thỏa thuận đổi sang hàng mới khác có giá trị tương đương hoặc sẽ hoàn trả lại
                                    đúng số tiền mà quý khách đã mua. Chú ý: không áp dụng đối với các thiết bị như các
                                    thiết bị có tính chất hao mòn, các thiết bị bị cắt rời, bẻ gãy, làm mất bao bì hoặc bị
                                    trầy xước, do bẩn.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Trường hợp hàng đã mua quá thời hạn 15
                                    ngày thì sẽ được nhận lại để bảo hành (sửa chữa). Nếu không thể sửa chữa được thì cửa
                                    hàng sẽ thay thế một sản phẩm khác tương đương và sản phẩm này không nhất thiết mới
                                    100%.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Thời gian giải quyết bảo hành tối đa
                                    30 ngày kể từ ngày nhận (trừ ngày Chủ Nhật và các ngày lễ) và tùy từng trường hợp có thể
                                    giải quyết sớm hơn hoặc chậm hơn.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Đối với các thiết bị không thể sửa
                                    chữa được mà thiết bị này hết hàng do không còn sản xuất nữa hoặc không còn lưu hành
                                    trên thị trường. Quý khách phải đợi nhà phân phối đổi hàng khác có giá trị tương đương
                                    hoặc cao hơn và bù tiền theo thỏa thuận của giá cả hiện hành trên thị
                                    trường.&nbsp;<em>Thời hạn bảo hành đối với sản phẩm được thay thế sẽ được tính tiếp tục
                                        mà không bảo hành lại từ đầu.</em></li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Đối với các thiết bị không sửa chữa
                                    được trong nước phải gởi sang nhà sản xuất ở nước ngoài thì thời hạn có thể kéo dài từ 4
                                    đến 6 tuần (Không tính ngày lễ và ngày cuối tuần)</li>
                            </ol>
                            <h4
                                style="color: rgb(34, 34, 34); width: 1050px; margin-bottom: 0.5em; text-rendering: optimizespeed; font-size: 1.125em; font-family: Arial, Tahoma, sans-serif; font-weight: 700;">
                                Địa chỉ và thời gian tiếp nhận bảo hành</h4>
                            <p
                                style="margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                SmartDevice Shop – Số 123, đường Lĩnh Nam, phường Vĩnh Hưng,Hoàng Mai,Hà Nội<br><span
                                    style="font-weight: bolder;">Hotline</span>: 0377592469</p>
                            <ul
                                style="list-style-position: initial; list-style-image: initial; padding: 0px; margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Từ 9h – 17h00 (T2 – T6) và 9h – 12h00
                                    (T7); Chủ Nhật nghỉ.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Khách hàng mang hàng hoá đến bảo hành
                                    đúng giờ quy định sẽ có nhân viên kỹ thuật kiểm tra và nhận thiết bị. Trường hợp khách
                                    hàng giao hàng bảo hành cho nhân viên bán hàng (không đủ chuyên môn về kỹ thuật), có vấn
                                    đề gì xảy ra cửa hàng xin miễn nhận trách nhiệm.</li>
                                <li style="margin-bottom: 0.6em; margin-left: 1.3em;">Khách hàng nếu giao thiết bị bảo hành
                                    cho nhân viên của công ty có quyền yêu cầu nhân viên trả giấy biên nhận thiết bị bảo
                                    hành trong đó ghi nhận rõ tình trạng thiết bị khi giao cho nhân viên kỹ thuật bảo hành
                                    để đảm bảo quyền lợi cho khách hàng.</li>
                            </ul>
                            <p
                                style="margin-bottom: 1.3em; color: rgb(57, 57, 58); font-family: Arial, Tahoma, sans-serif;">
                                RẤT HÂN HẠNH ĐƯỢC PHỤC VỤ QUÝ KHÁCH!</p>
						</div>
					</div>

				</div>
			</div>
	</section>
	<!-- End About Us -->
	
	
	
@endsection