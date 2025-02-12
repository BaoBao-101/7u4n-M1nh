Tải dữ liệu về thì chúng ta có một file .class , đối với những bạn đã học java thì đây là một tệp bytecode được dịch từ java. Vậy thì thử dùng decompiler java của khầy RE đưa cho chúng ta là jadx-gui

![image](https://github.com/user-attachments/assets/bf0d9e12-565e-433e-967f-592d43176d5e)

Hình như bị lỗi nên tui xài tool online luôn nha

![image](https://github.com/user-attachments/assets/ac288820-d147-4daf-84eb-5ff1e74aa696)

Hình như là được rồi. Mình sẽ cho vào netbean chạy thử xem sao

![image](https://github.com/user-attachments/assets/68ea3b72-920a-4cf8-9e4b-769bd2f0c940)

Giờ thì xem code có gì ...

![image](https://github.com/user-attachments/assets/817c85c4-1271-45c2-9959-c9005c45873c)

Mình nghĩ cipher và phần code này là flag nếu đoán đúng 10/10, mảng cipher sẽ XOR với các giá trị mình đoán và rồi AND với 255 là ra flag. Code mình vừa giải thích vừa rồi chưa hint được cho mình những số cần nhập

Nhưng khi để ý biến var2 và tìm hiểu thì công dụng của nó là in ra dãy số ngẫu nhiên nhưng là cố định. Bởi vì có seed trong object random, nếu không có seed thì dãy số in ra sẽ là ngẫu nhiên nhưng không cố định.

![image](https://github.com/user-attachments/assets/af69c5cc-27e1-406a-94fe-9643493ab40c)

Vậy mình sẽ viết hàm in ra 10 số đầu tiên trong hàm random đó trong phạm vi 256 số và trả lời xem sao

![image](https://github.com/user-attachments/assets/bc6bf255-6ef2-4a41-b27f-6fe3fcb73a05)

Sau khi chạy và nhập đúng những số được random thì ...

![image](https://github.com/user-attachments/assets/209df463-e48a-4c8e-9989-ae225dc7112d)

Flag: FIA{G4mbl3_Lun4r_N3w_Ye4r_1s_n0t_3n0ugh}

