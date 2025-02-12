Đây là bài đầu tiên mình unlock được đó!!!

Khi download file .wav về và tìm hiểu, đây là file âm thanh. Khi nghe qua, bạn sẽ để ý phần âm thanh ở đằng sau hơn những tiếng chim đại bàng ban đầu.
Vì mình đã từng biết đến nó nên việc tìm hiểu công cụ để giải rất nhanh. Có một công cụ để giải online nhưng mình quên tới hiện tại viết write-up nên mình xài cái khác :))
. Đó là sonic visualiser, sau khi xem hướng dẫn sử dụng thì mình lọc xem âm thanh đó biểu diễn cái gì. Đây là âm thanh gốc

![image](https://github.com/user-attachments/assets/92b4bef4-b7ee-45b6-a9e6-546789fa29b5)

Trong phần layer chọn như trong ảnh

![image](https://github.com/user-attachments/assets/904bb7d4-b30c-4765-884b-246a1c17c989)

![image](https://github.com/user-attachments/assets/b48c26eb-6e00-44fd-b7dc-f9a873d0fc88)

Đây là đường dẫn truy cập vào github của author

![image](https://github.com/user-attachments/assets/4eb4cace-9d40-4de9-9dbb-f504ec3ea398)
![image](https://github.com/user-attachments/assets/f6073853-d4e5-4541-a7e4-c00d2fdf2c58)

Với tên đề bài là steg, mình nghĩ ngay đến bài thuyết trình của nhóm Forensic. Lưu ngay 2 ảnh về để G0 Deep!!! (hint.txt)

Mình xài một công cụ trong Kali là exiftool, nó giúp mình phân tích nhiều hơn về picture

Ảnh eagle có khá nhiều thông tin nhưng không có cái nào mình thấy khả nghi là flag

![image](https://github.com/user-attachments/assets/0a5f324e-908f-490c-96a1-350d8b190202)

Ảnh treasure có phần title là một dãy hex khá đáng ngờ nên mình đem đi decode nó

![image](https://github.com/user-attachments/assets/e985b5fe-c5e7-4b76-9bcc-2ff6cb4d8140)

![image](https://github.com/user-attachments/assets/9e83601f-7431-477a-8a4a-0d84df5ad524)

Mình thấy vẫn bị encode nên tiếp tục decode, lần này là base64

![image](https://github.com/user-attachments/assets/2032c23f-abcc-4166-b765-81e6209e65e7)

Flag: FIA{Y0u_h@ve_fOund_th3_treasure_of_Eagleeeee}
