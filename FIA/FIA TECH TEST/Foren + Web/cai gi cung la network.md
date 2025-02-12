Xem thử trong file .pcapng mình tải về có gì nào

![image](https://github.com/user-attachments/assets/e8b4122f-004f-4c02-bac3-767eecb1084b)

Đây không phải là một bài phân tích dữ liệu bình thường, mà là phân tích dữ liệu từ các i/o của USB như bàn phím, chuột, ...

Sau khi tìm hiểu sơ về protocol này mình bắt đầu query để lọc thông tin

![image](https://github.com/user-attachments/assets/05cb45af-8656-4953-8807-47691d377d9e)

Khi bỏ qua những dòng configure đầu tiên các bạn sẽ để ý độ dài của các gói tin đa số là 27 và 35

![image](https://github.com/user-attachments/assets/2a78fcb4-8e22-4b95-8cc9-9cf26661db67) 

![image](https://github.com/user-attachments/assets/0120bf97-c2ab-4c62-a9d4-d502284566db)

Sau khi tìm hiểu thì 2 độ dài này là từ các thiết bị nhập khác nhau 

![image](https://github.com/user-attachments/assets/8e74d823-cc1c-4ca9-87e6-0314efca60b2)![image](https://github.com/user-attachments/assets/97d4562d-5f8e-4545-aa50-357b67ac101e)

Do mình thấy những gói 35 bytes có phần HID data nên mình lọc nó

Trong phần info, mình tìm dữ liệu của urb_interrupt thì thấy hầu hết là 0x01. Vậy nó là gì???

![image](https://github.com/user-attachments/assets/40ff7959-4b90-48c2-b9fc-a7711b043dca)

Filter tiếp theo mình lọc là nội dung không cần

![image](https://github.com/user-attachments/assets/597b0c46-fe6e-4fc1-9d56-e0791943b6d2)

Có những packet có dữ liệu 00 00 00 00 00 00 00 00 thì bỏ nó luôn

Vậy query của mình là: frame.len == 35 and usb.transfer_type == 0x01 and !(usb.capdata == 00:00:00:00:00:00:00:00)

Sau đó mình xuất dữ liệu lọc được ra 1 file riêng. Tiếp theo mình dùng 1 công cụ trong kali để in ra phần data mình lấy được

![image](https://github.com/user-attachments/assets/369e69b4-edbb-44f1-be62-01273093ec71)

Phần câu lệnh khá giống với phần filter trong wireshark, về option các bạn có thể tự tìm hiểu thêm. Để dữ liệu giống như trong wireshark mình thêm dấu ':' giữa mỗi kí tự hex.
Dữ liệu in ra là dữ liệu dạng hex, và để mã hóa được những kí tự này các bạn có thể đọc tài liệu này https://usb.org/sites/default/files/documents/hut1_12v2.pdf ở trang 55, 56, 57, 58. Khi tìm hiểu để dịch thì mình biết được như sau

![image](https://github.com/user-attachments/assets/18efd54d-08c2-41c1-8854-946136f3a1c9)

Ví dụ như 00:00:1a:09:00:00:00:00, theo tài liệu mình chia sẻ thì 1a là chữ w và 09 là chữ f.
Việc tiếp theo là viết code giải.
Và đây là link mình tham khảo code để chạy https://github.com/TeamRocketIst/ctf-usb-keyboard-parser/blob/master/usbkeyboard.py

Và khi chạy code thì ...

![image](https://github.com/user-attachments/assets/e584b451-7a11-4bc8-b0f4-6cff97e22798)

Flag: FIA{https://www.youtube.com/watch??v=NHEst6ZzlMk}

Đây là bài mình tham khảo, làm lại và giải thích theo cách mình hiểu. Mong mọi người cảm nhận được nó
