# ใช้ PHP + Apache เป็นฐาน
FROM php:8.2-apache

# ติดตั้งส่วนขยายที่จำเป็น เช่น MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# คัดลอกโค้ดทั้งหมดไปที่เซิร์ฟเวอร์
COPY . /var/www/html

# ตั้งค่าพอร์ตที่ใช้รัน (Apache)
EXPOSE 80

# รัน Apache
CMD ["apache2-foreground"]
