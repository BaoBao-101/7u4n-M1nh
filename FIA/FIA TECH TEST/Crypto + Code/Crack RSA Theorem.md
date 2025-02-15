Đây là một bài nói về một lý thuyết của các anh Chinese về toán, và được áp dụng trong crypto

![image](https://github.com/user-attachments/assets/c36d6e1c-b716-4930-ab00-4c5f33a49ccc)

Ban đầu thì mình chưa biết dữ liệu này để xử lý thuật toán gì, khi hỏi chatGPT thì mình mới biết đây là Chinese Remainder Theorem (CRT). Một định lý toán học giúp tối ưu hóa việc tính toán trên số nguyên lớn dựa trên thuật toán RSA

Các bạn có thể xem qua tổng quát về lý thuyết tại đây https://www.youtube.com/watch?v=e8DtzQkjOMQ

![image](https://github.com/user-attachments/assets/4f29d7f5-72e9-484b-ae7d-5eaac7e8b9b5)

Khi phân tích code thì flag là biến m được mã hóa. Với dữ liệu output cho ở trên chúng ta sẽ sử dụng phương pháp RSA Broadcast Attack.


c0 = m^e mod n0

c1 = m^e mod n1

c2 = m^e mod n2

Công thức tổng quát để giải bài này là

M = c0\*N0\*N0^-1 + c1\*N1\*N1^(-1) + c2\*N2\*N2^(-1) mod N. 

Trong đó M = m^i và i=3 trong vòng for, vì có các module n khác nhau nên ta sẽ kết hợp lại là N = n0*n1*n2

N0 = N/n0 , N1 = N/n1 , N2 = N/n2

Ni*Ni^(-1) = 1 mod ni . Ví dụ 35*x mod 3 = 1 mod 3 , dễ dàng để tính ra x là 2.

Để tìm được Ni^(-1) các bạn có thể tìm hiểu hàm inverse()

![image](https://github.com/user-attachments/assets/cdc9ef00-9286-4e09-a8e9-5700ccb72aa3)

Flag: FIA{175_d4n63r0u5_t0_g0_4l0n3?_t4k3_CRT}

