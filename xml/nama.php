	<?php  	// 4. MENGAMBIL DATA DARI DATABASE


		$namaTabel = "laporan";
		 $query = "SELECT * from users ";
          $hasil= mysqli_query($conn,$query);
		$jumField = mysqli_num_fields($hasil);
		$sites = array();

		while ($data = mysqli_fetch_array($hasil))
		{
			$sites [] = array('nama' => $data['nama'], 'email' => $data['email'], 'username' => $data['username']);
		}

		// 5. PARSING DATA SQL -> XML Document : print_r($sites);
		$document = new DOMDocument();
		$document->formatOutput = true;

		$root = $document->createElement( "data" );
		$document->appendChild( $root );

		foreach( $sites as $laporan )
		{
			$block = $document->createElement( "datauser" );

			$nama = $document->createElement( "nama" );
			$nama->appendChild(
			$document->createTextNode( $laporan['nama'] )
			);
			$block->appendChild( $nama );

				$email = $document->createElement( "email" );
			$email->appendChild(
			$document->createTextNode( $laporan['email'] )
			);
			$block->appendChild( $email );

	$username = $document->createElement( "username" );
			$username->appendChild(
			$document->createTextNode( $laporan['username'] )
			);
			$block->appendChild( $username );
			

			$root->appendChild( $block );
		}

			// 6. MENYIMPAN DATA DALAM BENTUK FILE linksp.xml
			$document->save("nama.xml");
			?>