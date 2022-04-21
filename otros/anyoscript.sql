use Projecte;

declare anyy string default "";
declare anys int default 2023;

set anyy = anys+"-"+(anys+1);

	start transaction;
	while anys < 2101
		insert into Any values (anyy,0);
		set anys=anys+1;
		set anyy = anys+"-"+(anys+1);
	end while;
	commit;

