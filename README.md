Pred použitím stránky je nutné:

- SPUSTIŤ SKRIPT "applyfor.sql" v priečinku "@ApplyFor\DBSCRIPT_and_SHADOW" cez DB CMD

- SPRÁVNE LOKALIZOVAŤ SKRIPT "shadow_af.php" do prečinku o 2 úrovne vyššie, ako samotný priečinok projektu "@ApplyFor" (ak "C:\htdocs\@ApplyFor" tak "C:shadow_af.php") 
	
	- tento skript je uložený v priečinku "@ApplyFor\DBSCRIPT_and_SHADOW" 
	
	- sú v ňom definované len základné prihlasovacie údaje (root bez hesla) z dôvodu, 
	že skutočné prihlasovacie údaje (admin s heslom) nie sú dostupné pre distribučnú verziu nášho projektu