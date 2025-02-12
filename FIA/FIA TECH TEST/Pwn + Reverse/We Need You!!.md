Xem thử trong file .c có gì nào

![image](https://github.com/user-attachments/assets/6ac6d547-5d0c-4db0-a235-55df34f46ebc)

Là một kiểu buffer overflow. Mình thử nhập hơn số kí tự được khai báo char buf[16]

![image](https://github.com/user-attachments/assets/90813f5c-ecda-4678-9a82-8cb573b3eaa2)

Hệ thống trả về một bash shell, hãy xem thử bash này có những gì với lệnh 'ls'

Vì mình đã tốn khá thời gian để tìm xem flag có thể nằm ở đâu nên mình biết flag là 1 file ẩn .flag . Bạn chỉ có thể thấy với lệnh ls -a

Vậy hãy đọc nó

![image](https://github.com/user-attachments/assets/3241c1a2-3d4c-4097-a591-cdead0a121f7)

Flag được mã hóa dưới dạng hex, và giờ chỉ cần bake

![image](https://github.com/user-attachments/assets/e4f387fa-2a70-4daf-9641-e04a363566d1)

Flag: FIA{0V3r_F10W_1S_34SY}
