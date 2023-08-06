# ct519
การออกแบบฐานข้อมูล และหลักการออกแบบweb ออกแบบเป็น web application ใช้ MySQLDB สร้าง database myhobbies and create hobbies_db  สามารถ Add ,Delete and Show (ชื่อ-นามสกุลผู้แต่ง,email,เพศ,รายละเอียดหนังสือ,รูปภาพ) การอธิบายส่วนของ code ที่สำคัญ จะเป็นด้านการทำระบบหลังบ้าน โดยเว็บจะมี 1 หน้า ใช้ PHP เป็นหลังบ้าน หน้าบ้านเป็น html,css,javascript แบ่งเป็น Front end และ backand และ Database แยก container กัน

การเตรียมการระบบ Cloud เป็นการใช้ ec2 โดยใช้ instance type t2micro , ARM ในการทำ และ install docker environment รวมถึง git เพืื่อ clone data มาเพื่อ deploy

การ deploy ตัว code มาทำงาน 1.สร้างเว็บและ sql ให้เรียบร้อย พร้อมทั้ง dockerfile และ docker-compose.yaml 2.เตรียม git ให้พร้อม 3.สร้าง repositories CT519-65130543 4.อัพโหลด 1 ขึ้น repositories CT519-65130543 5.ใน Aws install docker engine ให้เรียบร้อย 6.ใน Aws install docker compose ให้เรียบร้อย 7.ใน command line git clone https://github.com/65130543/ct519.git 8.cd CT519-65130543 9.chmod -R 777 all file and folder 10.docker-compose up --build
![image](https://github.com/65130543/ct519/assets/141551144/59277624-a093-40ed-93eb-eb835f8eae1b)
