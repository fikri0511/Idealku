	<?php  	// 4. MENGAMBIL DATA DARI DATABASE
	include '../connect.php';
		$namaTabel = "laporan";

		 $query = "select * from laporan";
          $hasil= mysqli_query($conn,$query);
		$jumField = mysqli_num_fields($hasil);
		$sites = array();

		while ($data = mysqli_fetch_array($hasil))
		{
			$sites [] = array('id_laporan' => $data['id_laporan'], 'berat' => $data['berat'], 'tinggi' => $data['tinggi'], 'aktifitas' => $data['aktifitas'],
			'username' => $data['username']);
		}

		// 5. PARSING DATA SQL -> XML Document : print_r($sites);
		$document = new DOMDocument();
		$document->formatOutput = true;

		$root = $document->createElement( "data" );
		$document->appendChild( $root );

		foreach( $sites as $laporan )
		{
			$block = $document->createElement( "laporan" );

			$id = $document->createElement( "id_laporan" );
			$id->appendChild(
			$document->createTextNode( $laporan['id_laporan'] )
			);
			$block->appendChild( $id );

			$author = $document->createElement( "berat" );
			$author->appendChild(
			$document->createTextNode( $laporan['berat'] )
			);
			$block->appendChild( $author );

			$title = $document->createElement( "tinggi" );
			$title->appendChild(
			$document->createTextNode( $laporan['tinggi'] )
			);
			$block->appendChild( $title);

			$genre = $document->createElement( "aktifitas" );
			$genre->appendChild(
			$document->createTextNode( $laporan['aktifitas'] )
			);
			$block->appendChild( $genre );

			$username = $document->createElement( "username" );
			$username->appendChild(
			$document->createTextNode( $laporan['username'] )
			);
			$block->appendChild( $username );

			$root->appendChild( $block );
		}

			// 6. MENYIMPAN DATA DALAM BENTUK FILE linksp.xml
			$document->save("linksp.xml");
			?>