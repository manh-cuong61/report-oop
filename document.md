* Lập trình hướng đối tượng
1. khái niệm: lập trình hướng đối tượng là một kỹ thuật lập trình mà quy tất cả về đối tượng để quản lý.

    - EX: quản lý sinh viên gồm các đối tượng: 
        + học sinh
        + môn học
        + điểm
        + lớp
        + khoa
2. class và object
    - class là định nghĩa cho những thứ tổng thể
    - object là tạo ra một cái cụ thể từ class

    - EX: 
        + bản vẽ nhà ( class )
        + mỗi ngôi nhà là một object

    - cách định nghĩa một class
        class ClassName 
        {
            - thuộc tính
            - phương thức
        }

    - định nghĩa về đối tượng
        
        $name = new ClassName

3. thuộc tính và phương thức
    - Biến được khai báo trong class và có kèm theo cơ chế
    - hàm được khai báo trong class và có kèm theo cơ chế 

=> cơ chế: quy định phạm vi truy cập đến phương thức hoặc thuộc tính 
    - public (cho phép truy cập ở mọi nơi)
    - protected (cho phép truy cập ở bên trong class, class con)
    - private (chỉ cho phép truy cập ở bên trong class)

4. kế thừa
- cho phép sử dụng lại những thứ mà ở class cha có trừ những thuộc tính và phương thức sử dụng cơ chế private

- dùng từ khóa extends để kế thừa
- ghi đè dữ liệu(overide): ở class cha và class con có thuộc tính hoặc phương thức trùng tên
- Overloading là một kĩ thuật cho phép trong cùng một class có thể có nhiều phương thức cùng tên nhưng khác nhau về số lượng tham số hoặc kiểu dữ liệu tham số

5. Hằng số trong class php
- const NAME_CONST = value;
- để truy cập vào giá trị của hằng:
    + trong class( method ): self::NAME_CONST
    + ngoài class: ClassName::NAME_CONST

    EX: 
        + student::AGE
        + self::AGE

6. phương thức tĩnh và thuộc tính tĩnh
- Phương thức tĩnh là hàm được khai báo trong class và có kèm them từ khóa static
- Thuộc tính tĩnh là biến được khai báo trong class và có kèm theo từ khóa static

*cách truy cập
- Ngoài class (giống hằng): Truy cập trực tiếp qua tên class
ex: Student::$name;
- Trong class (giống hằng): Truy cập
 qua từ khóa self 

7. Khởi tạo và hàm hủy
- Khởi tạo: __construct(){}
- Hàm hủy: __destruct(){}

8. final
- sử dụng để chống kế thừa và chống ghi đè
- sử dụng bằng từ khóa final trước className
- chống ghi đè: đặt final trước phương thức

9. Tính đóng gói
- dùng public, protected và private để quy định phạm vi truy cập
    + public: access ở mọi nơi( bên ngoài class, bên trong class, ở class con kế thừa)
    + protected: access ở bên trong class và class con kế thừa
    + private: chỉ access được bên trong class

10. Tính kế thừa:
    Cho phép các lớp con kế thừa và sử dụng lại tất cả các phương thức và thuộc tính của class cha, những thuộc tính và phương thức đó phải mang cơ chế public hoặc protected

11. Tính trừu tượng:
    - tính trừu tượng được sinh ra để định nghĩa những cái chung nhất cho những class con kế thừa nó. nó chỉ cần định nghĩa tên và không cần viết chi tiết bên trong của phương thức đó, những class con kế thừa nó sẽ phải định nghĩa lại các phương thức đó
    - ví dụ như chó và chim đều kế thừa sử dụng phương thức 'run' nhưng chó sẽ định nghĩa lại chi tiết bên trong phù hợp với nó là chạy bằng 4 chân còn chim sẽ chạy bằng 2 chân 

12. Tính đa hình:
    2 hoặc nhiều lớp có những phương thức giống nhau nhưng có thể thực thi theo những cách khác nhau

13. Abstract:
    lớp trừu tượng được định nghĩa bằng từ khóa abstract
    trong class abstract sẽ có phương thức abstract
    những class kế thừa class abstract sẽ phải định nghĩa lại phương thức abstract trong class abstract đã kế thừa

14. Interface: 
    định nghĩa bằng từ khóa interface
    Hỗ trợ đa kế thừa
    Tất cả những class kế thừa interface phải định nghĩa lại toàn bộ những phương thức có trong interface
