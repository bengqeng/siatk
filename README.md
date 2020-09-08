# siatk

clone this projet into your local 
- check out to develop branch to start code 


the system will have 3 main purpose 
1. production (live)
2. development (live testing) [QA, developers etc]
3. local (developer)

will have 3 url:
- localhost/siatk (local)
- staging.{domain}/siatk (testing live) 
		you can acces this staging on localhost with url (staging.localhost/siatk)
- {domain}/siatk {live production}

how to use:
setting database :
	go to application
		1. Local purpose
			- set database.php on config local 'database' => 'local_siatk' (local purpose) 
				and create table on mysql with name {local_siatk}
				or
			- change to your requirement :)
		2. development (staging)
			(local)
			- set database.php on config development 'database' => 'staging_siatk'	
				(staging) it will be used when you acces {staging.localhost/siatk}
			(live)
			- still in progress
		3. production 
			- still on progress
						--> Happy Code :) <--
