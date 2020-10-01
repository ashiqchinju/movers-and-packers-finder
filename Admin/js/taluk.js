
    function random_function(){
        let a = document.getElementById('district').value;
        if ( a === 'Bagalkote' ) {
            var arr = ['select taluk','Bagalkote','Jamkhandi','Mudhol','Badami','Bilagi','Hunagunda','Ilkal','Rabkavi Banhatti','Gulegudda','Terdala'];
        }
        else if ( a === 'Bangalore Rural') {
            var arr = ['select taluk','Nelamangala','Doddballapura','Devanapura','Hosakote'];
        } else if (a === 'Bangalore Urban'){
            var arr = ['select taluk','Bengaluru','Kengeri','Krishnarajapura','Yelahanka'];
        }
        else if (a === 'Belagavi'){
            var arr = ['select taluk','athani','belagavi','bailhongal','chikkodi','gokak','khanapura','mudalgi','nippani','raybag','savdatti','ramadurga','kagawada','hukkeri','kitturu','yargatti'];
        }
        else if (a === 'Bellary'){
            var arr = ['select taluk','bellary','hagoribommanahalli','harappanahalli','hoovina hadagali','hosapete','kudligi','sanduru','siraguppa'];
        }
        else if (a === 'Bidar'){
            var arr = ['select taluk','aurad','basavaklayana','balkij','bidar','chitgoppa','hulsoor','humnabad','kamalnagar'];
        }
        else if (a === 'Bijapur'){
            var arr = ['select taluk','bijapur','indi','basavana bagevadi','sindgi','muddebihalli','talikote','devara hipparagi','chadchan','tikota','bableshwar','nidagundi','kolhar','almel'];
        }
        else if (a === 'Chamarajanagar'){
            var arr = ['select taluk','chamarajanagar','kollegala','gundlupete','yelanduru','hanur','rampura'];
        }
        else if (a === 'Chikballapura'){
            var arr = ['select taluk','chikballapura','bagepalli','chintamani','gauribidanur','gudibanda','sidhlaghatta','chelur'];
        }
        else if (a === 'Chikmagaluru'){
            var arr = ['select taluk','chikmagaluru','kadur','tarikere','koppa','sringeri','mudigere','ajjampura','narasimharajapura','kalasa'];
        }
        else if (a === 'Chitradurga'){
            var arr = ['select taluk','chitradurga','challakere','hiriyur','holalkere','hosadurga','molakalmuru'];
        }
        else if (a === 'Dakshina Kannada'){
            var arr = ['select taluk','mangaluru','ullal','mulki','moodbidri','bantwala','beltangadi','puttur','sulya','kadaba'];
        }
        else if (a === 'Davanagere'){
            var arr = ['select taluk','davanagere','harihara','honnalli','nyamathi','jagaluru'];
        }
        else if (a === 'Dharwad'){
            var arr = ['select taluk','kalghatghi','dharwad','hubballi rural','hubballi urban','kundgol','navalgund','alnavara','annigeri'];
        }
        else if (a === 'Gadag'){
            var arr = ['select taluk','gadag','nargund','mundargi','ron','shirhatti'];
        }
        else if (a === 'Gulbarga'){
            var arr = ['select taluk','gulbarga','afzalpura','alanda','chincholi','chitapura','jevargi','sedam','shahbad'];
        }
        else if (a === 'Hassan'){
            var arr = ['select taluk','hassan','arasikere','channarayapattana','holenarsipura','sakleshpura','aluru','arakalgudu','beluru'];
        }
        else if (a === 'Haveri'){
            var arr = ['select taluk','ranibennuru','byadagi','hangal','haveri','savaruru','hirekeruru','shiggavi','rattihalli'];
        }
        else if (a === 'Kodagu'){
            var arr = ['select taluk','madikeri','somwarpete','virajapete'];
        }
        else if (a === 'Kolar'){
            var arr = ['select taluk','kolara','bangarapete','maluru','mulabagilu','srinivasapura','kolar gold fields'];
        }
        else if (a === 'Koppal'){
            var arr = ['select taluk','gangavati','koppala','kushtagi','yalaburga','kanakagiri','karatagi','kukanoor'];
        }
        else if (a === 'Mandya'){
            var arr = ['select taluk','mandya','maddur','malavvalli','srirangapattana','krishnarajapete','nagamangala','pandavapura'];
        }
        else if (a === 'Mysore'){
            var arr = ['select taluk','mysore','hunasur','krishnarajanagara','nanjangudu','heggadadevanakote','piriyapattana','t narasipura','saragur','saligrama'];
        }
        else if (a === 'Raichur'){
            var arr = ['select taluk','raichur','manvi','sindhnur','devadurga','lingsugur','sirawara','maski'];
        }
        else if (a === 'Ramanagara'){
            var arr = ['select taluk','ramanagara','magadi','kanakapura','channapatna','harohalli'];
        }
        else if (a === 'Shimoga'){
            var arr = ['select taluk','shimoga','bhadravati','shikaripura','soraba','thirthalli','sagara','hosanagara'];
        }
        else if (a === 'Tumkur'){
            var arr = ['select taluk','tumkur','chikkanayakanahalli','kunigal','madugiri','sira','tiptur','gubbi','koratagere','pavagada','turuvekere'];
        }
        else if (a === 'Udupi'){
            var arr = ['select taluk','Udupi','Kaup','Brahmavara','Karkala','Kundapura','Hebri','Byndoor'];
        }
        else if (a === 'Uttar Kannada'){
            var arr = ['select taluk','Karawara','Sirsi','Joida','dandeli','bhatkal','kumta','ankola','haliyal','honnavar','mundgod','siddapura','yellapura'];
        }
        else if (a === 'Yadagiri'){
            var arr = ['select taluk','yadagiri','shahpura','surapura','gurmitkal','vadagera','hunsagi'];
        } else {
            var arr = [''];
        }

        let string = '';
        for( i=0;i<arr.length;i++ ){
            string = string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
        }

        document.getElementById('taluk').innerHTML=string;
    }
