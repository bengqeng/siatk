# siatk

#Clone this projet into your local
  windows:
  - inside your root folder like (xampp, laragon)

  linux/ubuntu:
  - install apache2
  - install mysql
  - install php 5.6
  - clone to your /var/www

#System will have 3 main purpose
1. production (live)
2. development (live testing) [QA, developers etc]
3. local (developer)

#Will have 3 url:
- localhost/siatk (local)
- staging.{domain}/siatk (testing live)
		you can acces this staging on localhost with url (staging.localhost/siatk)
- {domain}/siatk {live production}

#how to use:
 - setting database :

go to application
just acces your url on local or server :)
it will give you the information how to set it :)

#when you update file dont forget to run this on your cli for phpcs
vendor/bin/phplint --no-cache


--> Happy Code :) <--
