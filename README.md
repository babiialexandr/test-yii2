1. git clone https://github.com/babiialexandr/test-yii2.git
2. cd test-yii2
3. docker-compose up -d
4. docker-compose exec app composer install
5. docker-compose exec app yii migrate
6. в файл /etc/hosts надо добавить 127.0.0.1 babii.test
7. sudo chmod 777 -R web/assets/
8. sudo chmod 777 -R runtime/
9. http://babii.test - тут форма лидов
10. Логин и пароль (admin admin) - http://babii.test/site/login
11. http://babii.test/contact/index - список лидов с быстрым поиском, возможностью редактирования и удаления    

12. Остановить докер: docker-compose stop
13. Остановить докер и удалить все контейнеры: docker-compose down