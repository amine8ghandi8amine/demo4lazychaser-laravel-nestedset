<?php

	use App\SiteSetting;

	use App\Building;

	use App\User;

	use App\Contact;

	use App\Reply;
	
	use App\Thing;
	
	use App\Car;
	
	use App\Area;

	use Intervention\Image\ImageManagerStatic as Image;
	
/****************VALID********************/

	function partCount(){

		return Building::count();
	}

	function partValidCount(){

		return Building::where('status', 1)->count();
	}

	function partSellCount(){

		return 0;
	}



	function getSelectedItemInThing( $id ){

		$collection =  new Building();

		return $collection->where( 'id', $id )->first()->thing_id;

	}

	function getThingName( $id ){

		$collection =  new Thing();

		return $collection->where( 'id', $id )->first()->name;

	}
	
	function getSelectedItemInCar( $id ){

		$collection =  new Building();

		return $collection->where( 'id', $id )->first()->car_id;

	}



	function getCarName( $id ){

		$collection =  new Car();


		return $collection->where( 'id', $id )->first()->name;

	}

	function getSelectedItemInArea( $id ){

		$collection =  new Building();

		return $collection->where( 'id', $id )->first()->area_id;

	}

	function getAreaName( $id ){

		$collection =  new Area();

		return $collection->where( 'id', $id )->first()->name;

	}


	function getSetting( $slug ){

		$siteSetting =  new SiteSetting();

		
		
		if( count( $siteSetting->where( 'slug', $slug )->first() ) > 0 ){
			return $siteSetting->where( 'slug', $slug )->first()->value;
		}else{
			return 'لا شيئ';
		}

	}

	function sellerCount(){

		return User::count();
	}

	function getUser( $userId ){

		$userTable =  new User;

		if( $userTable->where( 'id', $userId )->first() ){

			return $userTable->where( 'id', $userId )->first()->name;

		}else{

			return 'غير معروف';
		}

	}

	function getUserEmail( $userId ){

		$userTable =  new User;

		$userEmail = $userTable->where( 'id', $userId )->first()->email;

		return $userEmail;

	}

	function getUserCreatedAt( $userId ){



		$userTable =  new User;

		$userCreatedAt = $userTable->where( 'id', $userId )->first()->created_at;

		return $userCreatedAt;

	}
	
	function ifAdmin( $adminId ){

		$userTable =  new User;

		$ifAdmin = $userTable->where( 'id', $adminId )->first()->admin;

		return $ifAdmin;

	}



	function userCount(){

		return User::count();
	}

/*Counting messages*/

    function seenRepDelCount(){

        return Contact::where('view', 1)->where('reply', 1)->where('deleted', 1)->count();

    }

    function seenRep1DelCount(){

        return Contact::where('view', 1)->where('reply', 1)->where('deleted', 0)->count();
    }

    function seen1RepDelCount(){

        return Contact::where('view', 1)->where('reply', 0)->where('deleted', 1)->count();
    }

    function seen1Rep1DelCount(){

        return Contact::where('view', 1)->where('reply', 0)->where('deleted', 0)->count();
    }



    function unSeenRepDelCount(){

        return Contact::where('view', 0)->where('reply', 1)->where('deleted', 1)->count();
    }

    function unSeenRep1DelCount(){

        return Contact::where('view', 0)->where('reply', 1)->where('deleted', 0)->count();
    }

    function unSeen1RepDelCount(){

        return Contact::where('view', 0)->where('reply', 0)->where('deleted', 1)->count();
    }

    function unSeen1Rep1DelCount(){

        return Contact::where('view', 0)->where('reply', 0)->where('deleted', 0)->count();
    }
    
    /**/
    function agreeDelCount(){

        return Reply::where('confirmed', 1)->where('deleted', 1)->count();

    }  

    function agree1DelCount(){

        return Reply::where('confirmed', 1)->where('deleted', 0)->count();

    }

    function unAgreeDelCount(){

        return Reply::where('confirmed', 0)->where('deleted', 1)->count();

    }

    function unAgree1DelCount(){


        return Reply::where('confirmed', 0)->where('deleted', 0)->count();

    }

/**/

	function getAllInbox(  ){

    	$contacts =  new Contact;

		return  $contacts->where('view', 0 )->get() ;

    }

    function inboxCount(  ){

    	$contacts =  new Contact;

		return $contacts->count() ;

    }

    function inboxCountUnViewed(  ){

		return Contact::where('view', 0 )->count() ;

    }

    function sentCount(  ){

    	$replies =  new Reply;

		return $replies->count();

    }

    function draftCount(  ){

    	$replies =  new Reply;

		return $replies->where('confirmed', 0)->count();

    }

    function junkCount(){

    	$replies =  new Reply;

		return -1;

    }

    function trashCount(  ){

    	$replies =  new Reply;

		return $replies->where('deleted', 0)->count();

    }

    function generateReply( $id ){

    	return Reply::where('contact_id', $id)->get();

    }

    function generateMessage( $id ){

    	return Contact::where('id', $id)->get();

    }


	function activeClass($route = 'home', $id = -1, $segmentNum = 2, $additiveClass = '' ){

		if( $id != -1 ){
			return Route::currentRouteNamed( $route ) && Request::segment( $segmentNum ) == $id ? 'active': '';
		}else{
			return Route::currentRouteNamed( $route ) ? 'active': '';
		}
	
	}

	function aClass($route = 'home', $className = 'active' , $id = -1, $segmentNum = 2, $additiveClass = '' ){

		if( $id != -1 ){
			return Route::currentRouteNamed( $route ) && Request::segment( $segmentNum ) == $id ? $className: '';
		}else{
			return Route::currentRouteNamed( $route ) ? $className : '';
		}
	
	}

	function currentClass($route = 'home', $id = -1, $segmentNum = 2 ){

		if( $id != -1 ){
			return Route::currentRouteNamed( $route ) && Request::segment( $segmentNum ) == $id ? 'current': '';
		}else{
			return Route::currentRouteNamed( $route ) ? 'current': '';
		}

		
	}

	function ifImg( $varImg ){



		if( $varImg == '' || !file_exists( base_path().'/public/images/'.$varImg )  ){

			return asset('/images/'.getSetting( 'no-image' ) );

		}else{

			return asset('/images/'. $varImg);

		}


	}

	function resizeIMG($imgPath, $imgWidth, $imgHeight ){

        $newImgWidth = 520;

        $newImgHeight = 310;

        // open an image file
        $imgToResize = Image::make( $imgPath );

        if( $imgWidth < $newImgWidth || $imgHeight < $newImgHeight ){

            // now you are able to resize the instance
            $imgToResize->resize( $newImgWidth , $newImgHeight);

        }
        


        // and insert a watermark for example

        $imgToResize->insert( base_path().'/public/images/'. getSetting( "logo" ), 'bottom-right' );

        // finally we save the image as a new file
        $imgToResize->save( $imgPath );

    }

	function thingRent( $rentNumber = null ){

		$thingRents = [
			'غير صالحة لداتها',
			'يمكن أن تكون صالحة',
			'يستحب لها إصلاحات',
			'قديمة لكن مازالت تصلح',
			'متوسطة',
			'جيدة',
			'جيدة جدا',
			'جديدة',
		];
		

		
		$thingRentsCount = count( $thingRents ) +1;

		if( $rentNumber == -1 ){

			return $thingRents;
			
		}else{
			
			if( $rentNumber < -1 || $rentNumber > $thingRentsCount ){
				
				$rentNumber = $thingRentsCount;
				
			}

			return $thingRents[ $rentNumber ];
		}


		
	}
	
	function thingStatu( $statusNumber = null ){

		$thingStatus = [
			'غير مفعل',
			'مفعل'
		];
		
		$thingStatusCount = count( $thingStatus ) +1;
		


		if( $statusNumber == -1 ){
			
			

			return $thingStatus;
			
		}else{
			
			if( $statusNumber < -1 || $statusNumber > $thingStatusCount ){
				
				$statusNumber = $thingStatusCount;
				
			}

			return $thingStatus[ $statusNumber ];
		}	
	}

	function carCarb( $carbsNumber = null ){

		$carbNumbers = [
			'diesel',
			'gasoline',
			'GPL',
			'GNV',
			'biodiesel',
			'bioethanol',
			'biogaz',
			'algae fuel'
		];
		
		$carbNumbersCount = count( $carbNumbers ) +1;
		


		if( $carbsNumber == -1 ){
			
			

			return $carbNumbers;
			
		}else{
			
			if( $carbsNumber < -1 || $carbsNumber > $carbNumbersCount ){
				
				$carbsNumber = $carbNumbersCount;
				
			}

			return $carbNumbers[ $carbsNumber ];
		}	
	}

	function carModel( $yearsNumber = null ){

		$years = [
				'2017',
				'2016',
				'2015',
				'2014',
				'2013',
				'2012',
				'2011',
				'2010',
				'2009',
				'2008',
				'2007',
				'2006',
				'2005',
				'2004',
				'2003',
				'2002',
				'2001',
				'2000',
				'1999',
				'1998',
				'1997',
				'1996',
				'1995',
				'1994',
				'1993',
				'1992',
				'1991',
				'1990',
				'1989',
				'1988',
				'1987',
				'1986',
				'1985',
				'1984',
				'1983',
				'1982',
				'1981',
				'1980',
				'1979',
				'1978',
				'1977',
				'1976',
				'1975',
				'1974',
				'1973',
				'1972',
				'1971',
				'1970',
				'1969',
				'1968',
				'1967',
				'1966',
				'1965',
				'1964',
				'1963',
				'1962',
				'1961',
				'1960',
				'1959',
				'1958',
				'1957',
				'1956',
				'1955',
				'1954',
				'1953',
				'1952',
				'1951',
				'1950',
				'1949',
				'1948',
				'1947',
				'1946',
				'1945',
				'1944',
				'1943',
				'1942',
				'1941',
				'1940',
				'1939',
				'1938',
				'1937',
				'1936',
				'1935',
				'1934',
				'1933',
				'1932',
				'1931',
				'1930',
				'1929',
				'1928',
				'1927',
				'1926',
				'1925',
				'1924',
				'1923',
				'1922',
				'1921',
				'1920',
				'1919',
				'1918',
				'1917',
				'1916',
				'1915',
				'1914',
				'1913',
				'1912',
				'1911',
				'1910',
				'1909',
				'1908',
				'1907',
				'1906',
				'1905',
				'1904',
				'1903',
				'1902',
				'1901',
				'1900',
			
		];
		
		$yearsNumberCount = count( $years ) +1;
		


		if( $yearsNumber == -1 ){
			
			

			return $years;
			
		}else{
			
			if( $yearsNumber < -1 || $yearsNumber > $yearsNumberCount ){
				
				$yearsNumber = $yearsNumberCount;
				
			}

			return $years[ $yearsNumber ];
		}	
	}

	function thingKind( $kindsNumber = null ){

		$kindNumbers = [
			'تقديم',
			'طلب'
		];
		
		$kindNumbersCount = count( $kindNumbers ) +1;
		


		if( $kindsNumber == -1 ){
			
			

			return $kindNumbers;
			
		}else{
			
			if( $kindsNumber < -1 || $kindsNumber > $kindNumbersCount ){
				
				$kindsNumber = $kindNumbersCount;
				
			}

			return $kindNumbers[ $kindsNumber ];
		}	
	}

	function contactSeen( $contactSeen = null ){

		$contactSeens = [

			'غير مقروؤة',
			'مقروؤة'
			

		];

		if( $contactSeen == -1 ){

			return $contactSeens;
			
		}else{

			return $contactSeens[ $contactSeen ];
		}


		
	}


	function contactType( $contactType = null ){

		$contactTypes = [

			'تبليغ عن مشكل',
			'مساعدة',
			'شكر',
			'تشجيع',
			'نصيحة'
			

		];

		if( $contactType == -1 ){

			return $contactTypes;
			
		}else{

			return $contactTypes[ $contactType ];
		}


		
	}


	function contactRepleyed( $contactRepley = null ){

		$contactReplies = [

			'لم يجب بعد عن الرسالة',
			'أجيب عن الرسالة'
			

		];

		if( $contactRepley == -1 ){

			return $contactReplies;
			
		}else{

			return $contactReplies[ $contactRepley ];
		}


		
	}

	/*******************USEFUL FUNC ********************/

	function sluggify($string, $separator = '-', $maxLength = 96)
    {
        $title = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $title = preg_replace("%[^-/+|\w ]%", '', $title);
        $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        $title = preg_replace("/[\/_|+ -]+/", $separator, $title);

        return $title;
    }

    function generateEmail($name, $webapp ){

// array of possible top-level domains
$tlds = array("com", "net", "gov", "org", "edu", "biz", "info");

// string of possible characters
$char = "abcdefghijklmnopqrstuvwxyz";


// main loop - this gives 1000 addresses


  // choose random lengths for the username ($ulen) and the domain ($dlen)



  // reset the address
  $a = sluggify($name);

  // get $ulen random entries from the list of possible characters
  // these make up the username (to the left of the @)

  // wouldn't work so well without this
  $a .= "@";

  // now get $dlen entries from the list of possible characters
  // this is the domain name (to the right of the @, excluding the tld)
  for ($i = 1; $i <= 3 ; $i++) {
    $a .= substr($char, mt_rand(0, strlen($char)), 1);
  }

  // need a dot to separate the domain from the tld
  $a .= $webapp.".";

  // finally, pick a random top-level domain and stick it on the end
  $a .= $tlds[mt_rand(0, (sizeof($tlds)-1))];

	return $a;
    }



	/*******************END OF USEFUL FUNC ********************/



	

/***************End Valid*************************/	

	function buildingType( $typeNumber = null ){

		$buildingTypes = [

			'شقة',
			'فيلا',
			'منزل',
			'شاليه'

		];

		if( $typeNumber == -1 ){

			return $buildingTypes;

		}else{

			return $buildingTypes[ $typeNumber ];
		}


		
	}



	function buildingRent( $rentNumber = null ){

		$buildingRents = [

			'بيع',
			'إيجار'

		];

		if( $rentNumber == -1 ){

			return $buildingRents;
			
		}else{

			return $buildingRents[ $rentNumber ];
		}


		
	}
	






	function buildingStatu( $statusNumber = null ){

		$buildingStatus = [

			'غير مفعل',
			'مفعل'
			

		];

		if( $statusNumber == -1 ){

			return $buildingStatus;
			
		}else{

			return $buildingStatus[ $statusNumber ];
		}
		


		
	}


	function buildingPlace( $placesNumber = null ){

		$buildingPlaces = [

		1005 => "Casablanca",
		1013 => "Agadir"

		];

		if( $placesNumber == -1 ){

			return $buildingPlaces;
			
		}else{

			return $buildingPlaces[ $placesNumber ];
		}


		
	}




