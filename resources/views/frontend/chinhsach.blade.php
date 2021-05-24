@extends('frontend.layouts.master')

@section('title')
    Chính sách và điều khoản
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
@endsection

@section('content')

    <div class="main-page container-fluid">
        <div class="container mt-3 mb-3">
            <div class="row">
                <div>
                    <h4>
                        ĐIỀU KIỆN VÀ ĐIỀU KHOẢN HỢP ĐỒNG TƯ VẤN VAY
                    </h4>
                    <p>Điều kiện và điều khoản này là một phần không thể thiếu của Hợp Đồng Tư Vấn.</p>
                </div>

                <div>
                    <h5>1. PHẠM VI CUNG CẤP DỊCH VỤ</h5>

                    <p>Tùy thuộc vào các điều khoản và điều kiện của Hợp Đồng Tư Vấn này, Bên Tư Vấn, theo yêu cầu của Khách Hàng, đồng ý cung cấp dịch vụ tư vấn tài chính liên quan đến Khoản Vay của Khách Hàng (“Dịch Vụ") và Khách Hàng đồng ý sử dụng Dịch Vụ của Bên Tư Vấn, bao gồm nhưng không giới hạn các nội dung sau:</p>
                        <ul>
                            <li> 1.1.   thu thập, xác minh và thẩm định thông tin do Khách Hàng cung cấp trên hồ sơ xem xét các đơn xin được thực hiện bởi Khách Hàng;</li>

                            <li>1.2.   tư vấn về đặc tính sản phẩm vay, số tiền vay và thời hạn vay;</li>
                            <li>1.3.   tư vấn về điều kiện vay đối với Khách Hàng, các hồ sơ giấy tờ, quy định cần thiết cho Khoản Vay;</li>
                            <li>1.4.   tư vấn và hỗ trợ Khách Hàng trong việc chuẩn bị các tài liệu cần thiết, soạn Đơn đề nghị vay vốn;</li>
                            <li>1.5.   sắp xếp việc ký kết Hợp Đồng Vay giữa Khách Hàng và Bên Cho Vay;</li>
                            <li> 1.6.   hỗ trợ và kết nối thông tin liên lạc giữa Khách Hàng và Bên Cho Vay;</li>
                            <li>                    1.7.   hỗ trợ Khách Hàng các công việc phát sinh trong suốt Thời Hạn Vay kể cả thời gian chậm thanh toán khoản vay và thời gian gia hạn Khoản Vay (nếu có);
                            </li>
                            <li>                    1.8.   tư vấn về các điều kiện và/hoặc thủ tục thực hiện việc gia hạn Khoản Vay; và
                            </li>
                            <li>                    1.9.   thực hiện các dịch vụ liên quan và hỗ trợ Khách Hàng thực hiện Hợp Đồng Vay phù hợp yêu cầu của Bên Cho Vay.
                            </li>

                        </ul>

                    <h5>2. PHÍ TƯ VẤN </h5>

                    <p>
                    Trong phạm vi Dịch Vụ được nêu tại Điều 1 trên đây, Bên Tư Vấn có thể tính các khoản lệ phí sau đây từ Khách Hàng trong ngày thanh toán xác nhận với Khách Hàng:
                    </p>
                    <ul>
                        <li>Phí Dịch Vụ (sau đây gọi chung là “PDV”): sẽ được áp dụng cho các dịch vụ của Khách Hàng liên quan đến các khoản vay cũng như đánh giá tín dụng của Khách Hàng, tức là xác nhận và xác minh các  dữ liệu cá nhân của khách hàng và thông tin khác được cung cấp bởi Khách Hàng. PDV được tính dựa trên Khoản Vay và Thời Hạn Vay. PDV được xác định tại thời điểm Khách Hàng và Bên Cho Vay tham gia Hợp Đồng Vay, được tính cho mỗi ngày sử dụng Khoản Vay bắt đầu từ ngày đầu tiên khi Khoản Vay được chuyển sang tài khoản ngân hàng của Khách Hàng. Phí này có thể được thay đổi tương ứng nếu Khoản Vay và / hoặc Thời Hạn Vay được thay đổi. PDV sẽ được tính dựa vào Khoản Vay và Thời Hạn Vay được Bên Cho Vay phê duyệt, mức phí chi tiết của Hợp Đồng Tư Vấn này như sau:
                            PDV = ##SUM_COMMIS## VNĐ</li>
                        <li>Phí Tư Vấn Gia Hạn (sau đây gọi chung là “PTVGH”): sẽ được áp dụng mỗi khi Khách Hàng có yêu cầu Bên Tư Vấn sắp xếp với Bên Cho Vay để gia hạn Khoản Vay và được thu ngay sau khi Bên Tư Vấn sắp xếp gia hạn Khoản Vay thành công cho Khách Hàng. PTVGH được xác định dựa trên Khoản Vay và có thể được thay đổi tương ứng nếu Khoản Vay được gia hạn. PTVGH sẽ được tính như sau:
                            PTVGH = Khoản Vay * 5%</li>
                        <li>Phí Phạt Vi Phạm (sau đây gọi chung là “PPVP”): sẽ được tính từ Khách hàng trong trường hợp Khách Hàng đã chậm trễ việc thanh toán một phần nhất định của Khoản Vay (sau đây gọi là “Nợ Quá Hạn”) trong một số ngày nhất định sau Ngày Quá Hạn (sau đây gọi là “Ngày Quá Hạn” và hoặc ”NQH” trực tiếp). PPVP sẽ được tính dựa trên Nợ quá hạn và Ngày quá hạn, cụ thể PPVP của mỗi một ngày quá hạn như sau: ##TRANS_FEE_AMOUNT_INARREARS_PERDAY## VNĐ/ngày:
                            PPVP = PPVP của một ngày quá hạn * Số ngày quá hạn</li>
                        <li>Các khoản Phí Tư Vấn (Phí Dịch Vụ, Phí Tư Vấn Gia Hạn và Phí Chậm Thanh Toán) nêu trên đã bao gồm 10% thuế giá trị gia tăng (VAT).</li>
                        <li>                    Các khoản Phí Tư Vấn đã phát sinh sẽ không được hoàn trả vì bất cứ lý do nào trong mọi trường hợp, kể cả khi Khoản Vay được thanh toán trước.
                        </li>
                        <li>                    Bằng việc xin cấp Khoản Vay từ Bên Cho Vay hoặc đề nghị gia hạn Khoản Vay, Khách Hàng xác nhận và đồng ý với mức Phí Tư Vấn được quy định trong Hợp Đồng Tư Vấn này và Bên Tư Vấn sẽ gửi đến Khách Hàng một thông báo thông qua một Phương Thức Đăng Ký Giao Dịch mà Khách Hàng đã đăng ký với Bên Cho Vay trong quá trình thực hiện Hợp Đồng Vay (“Phương Thức Đăng Ký Giao Dịch").
                        </li>

                      </ul>
                    <p> Thanh toán Phí Tư Vấn:</p>

                    Thanh toán Phí Tư Vấn thông qua bên thứ ba là phương thức thanh toán duy nhất được phép theo Hợp Đồng Tư Vấn này, trừ khi có thỏa thuận bằng văn bản khác của các Bên.
                    Việc thanh toán các khoản phí theo Hợp Đồng Tư Vấn này được ưu tiên như sau:
                    <ul>
                        <li>PPVP</li>
                        <li>PTVGH</li>
                        <li>PDV</li>
                    </ul>
                    <p>
                        Khách Hàng cam kết và đảm bảo chịu mọi trách nhiệm và thực hiện mọi nghĩa vụ có liên quan đến việc sử dụng các Dịch Vụ của Bên Tư Vấn theo Hợp Đồng Tư Vấn này. Khách Hàng đồng ý tuân thủ với các hướng dẫn của Bên Tư Vấn để thực hiện việc thanh toán Phí Dịch vụ cho Bên Tư Vấn thông qua tài khoản ngân hàng được quy định trong Hợp Đồng Tư Vấn hoặc tài khoản ngân hang khác thỉnh thoảng được chỉ thị bởi Bên Tư Vấn thông qua tin nhắn và/hoặc email, trên trang web chính thức của Bên Tư Vấn hoặc bằng các phương tiện khác được xác nhận bởi các Bên..
                    </p>


                    <h5>3. THỜI HẠN HỢP ĐỒNG </h5>
                    <p>Hợp Đồng Tư Vấn này có thời hạn bằng đúng với thời hạn của Hợp Đồng Vay mà Khách Hàng ký kết với Bên Cho Vay.</p>
                    <p>  Trong trường hợp Khoản Vay được gia hạn thì Phí Tư Vấn Gia Hạn cũng sẽ phát sinh.
                    Do vậy, khi Thời Hạn Vay được gia hạn thì thời hạn của Hợp Đồng Tư Vấn này cũng được gia hạn với thời gian tương ứng.</p>

                    <h5>QUYỀN VÀ TRÁCH NHIỆM CỦA CÁC BÊN</h5>

                    <p>Quyền và trách nhiệm của Bên Tư Vấn</p>
                    <ul>
                        <li>Bên Tư Vấn có quyền được nhận Phí Dịch Vụ từ Khách Hàng theo đúng các điều khoản và điều kiện quy định tại Hợp Đồng Tư Vấn này.</li>
                        <li>Bên Tư Vấn có trách nhiệm cung cấp Dịch Vụ cho Khách Hàng một cách chuyên nghiệp và chu đáo, đảm bảo đáp ứng nhu cầu vay vốn của Khách Hàng một các đúng thời hạn và đúng yêu cầu.
                        </li>
                        <li>Bên Tư Vấn cam kết thực hiện nghĩa vụ của mình theo Hợp Đồng Tư Vấn này với kinh nghiệm, kỹ năng và sự thận trọng.
                        </li>
                        <li>Bên Tư Vấn, có thể tự mình hoặc theo quy định của pháp luật, ủy quyền cho bên thứ ba thực hiện Hợp Đồng Tư Vấn này.
                            Quyền và trách nhiệm của Khách Hàng
                        </li>
                    </ul>

                    <p>Khách Hàng có quyền từ chối sử dụng Dịch Vụ theo cách thức sau:</p>
                    <ul>
                        <li>Trong vòng 01 ngày kể từ ngày nhận được bất kỳ Thông Báo nào từ Bên Tư Vấn/ hoặc đối tác của Bên Tư Vấn (thông qua Phương Thức Đăng Ký Giao Dịch mà Khách Hàng đã đăng ký trước đó) về việc giải ngân khoản vay, Khách Hàng phải gọi điện thoại cho Trung Tâm Dịch Vụ Khách Hàng của Bên Tư Vấn để yêu cầu từ chối việc ký kết Hợp Đồng</li>
                        <li>Khách Hàng hoàn trả toàn bộ Khoản Vay đã được Bên Cho Vay giải ngân cho Khách Hàng (trong trường khoản vay đã được giải ngân) vào tài khoản ngân hàng quy định theo Hợp Đồng Vay trong vòng 01 ngày làm việc kể từ ngày nhận được khoản giải ngân.</li>
                        <li>Bất kể dù vì lý do gì, nếu quá thời hạn quy định nêu trên mà Khách Hàng không thực hiện việc từ chối hoặc hoàn trả Khoản Vay theo cách thức quy định tại Khoản này thì Hợp Đồng Tư Vấn này được xem như đã được Khách Hàng ký và có hiệu lực và Khách Hàng không có quyền từ chối hay hủy bỏ Hợp Đồng theo bất kỳ cách thức nào.</li>
                        <li>Khách Hàng có trách nhiệm thanh toán đầy đủ và đúng hạn các khoản Phí Tư Vấn được quy định tại Điều 2 trên đây.
                            Việc giao kết Hợp Đồng Tư Vấn này hoàn toàn tự nguyện, không bên nào bị lừa dối hoặc ép buộc. Các Bên có trách nhiệm tuân thủ và thực hiện đúng các điều khoản và điều kiện của Hợp Đồng Tư Vấn này.</li>
                    </ul>

                    <h5>HIỆU LỰC</h5>
                    <p>Các Bên tại đây thừa nhận và đồng ý không hủy ngang:</p>
                    <ul>
                        <li>Hợp Đồng Tư Vấn này được thực hiện thông qua phương tiện điện tử; và</li>
                        <li>Hợp Đồng Tư Vấn được ký kết bằng chữ ký điện tử phát sinh hiệu lực, có giá trị pháp lý và ràng buộc các Bên.
                            Trong phạm vi cho phép của pháp luật Việt Nam, Hợp Đồng Tư Vấn này sẽ có hiệu lực kể từ ngày ký và có giá trị ràng buộc các Bên cho đến khi kết thúc Thời Hạn Hợp Đồng Vay hoặc cho tới khi Khách Hàng đã hoàn tất mọi nghĩa vụ thanh toán đối với Bên Cho Vay và Bên Tư Vấn.
                            Tại mọi thời điểm, nếu bất kỳ điều khoản nào của Hợp Đồng Tư Vấn này bị hoặc trở nên vô hiệu hoặc không thể thực hiện do quy định của pháp luật của bất cứ lãnh thổ tài phán nào thì các giá trị, hiệu lực pháp lý và thực hiện của các điều khoản còn lại không bị ảnh hưởng dưới mọi hình thức.</li>
                        <li>Hợp Đồng Tư Vấn này được ký kết bằng tiếng Việt và tiếng Anh, trong trường hợp có sự không thống nhất giữa bản tiếng Anh và tiếng Việt thì bản tiếng Việt sẽ được ưu tiên áp dụng.</li>
                    </ul>

                </div>
            </div>
        </div>

    </div>

@endsection
