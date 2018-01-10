# Ceres-KukaroWebPage
## Kukaro Wep

설치 필요한 파일  
 * apache2 이상
 * php7 이상
 * mariadb나 mysql

선행 작업
 * database와 php, apache 모두 연동이 되어있어야 합니다.
 * apache에서는 rewrite를 활성화시킵니다.
 * my.cnf(my.ini) AllowOverride을 all로 바꿔줍니다.
 * my.cnf(my.ini) 에서 application/views/public의 AllowOverride는 none으로 변경합니다.
 * bower과 npm은 자동으로 설치하여 줍니다.
 * mac의 brew와 window의 choco는 본인이 설치하셔야하며 linux는 ubuntu를 지원합니다.
 
위의 프로그램이 모두 준비 되어있다면 윈도우라면 init.bat을, 리눅스나 맥이라면 init.sh를 시행합니다.
