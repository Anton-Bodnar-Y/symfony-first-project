<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Hashtags;
use App\Entity\News;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
		/**
		* seeder for Categories
		*/
		$categories = new Categories();
		$categories->setTitle('it in the agrisector');
		$categories->setDescription('this category contains articles about new technologies that have found application in agriculture');
		$manager->persist($categories);
		
		$categories = new Categories();
		$categories->setTitle('raiding');
		$categories->setDescription('news raiding in agriculture of Ukraine. About groups and officials who stand behind raiders');
		$manager->persist($categories);
		
		$categories = new Categories();
		$categories->setTitle('import');
		$categories->setDescription('import news of Ukraine. What products do we import into the country? Which countries supply us with products?');
		$manager->persist($categories);
		
		/**
		* seeder for Hashtags
		*/
		$hashtags = new Hashtags();
		$hashtags->setUrl('ukraina');
		$hashtags->setName('Украина');
		$manager->persist($hashtags);
		
		$hashtags = new Hashtags();
		$hashtags->setUrl('kriminal');
		$hashtags->setName('криминал');
		$manager->persist($hashtags);
		
		$hashtags = new Hashtags();
		$hashtags->setUrl('pozhar');
		$hashtags->setName('пожар');
		$manager->persist($hashtags);
		
		$hashtags = new Hashtags();
		$hashtags->setUrl('chuma');
		$hashtags->setName('чума');
		$manager->persist($hashtags);
		
		$hashtags = new Hashtags();
		$hashtags->setUrl('urozhai');
		$hashtags->setName('урожай');
		$manager->persist($hashtags);
		
		/**
		* seeder for News
		*/
		$news = new News();
		$news->setTitle('AGROAMERICA THE FIRST AGRIBUSINESS IN THE WORLD RECOGNIZED');
		$news->setCategoryId('1');
		$news->setShortDescription('Guatemala, June 2018.- Guatemalan oil palm plantations Agrocaribe and Agrofrancia, which are part of AgroAmerica corporation, 
		are the first in the world to obtain Rainforest Alliance’s Sustainable AgricultureGuatemala, June 2018.- Guatemalan oil palm plantations Agrocaribe and Agrofrancia, which are part of AgroAmerica corporation, 
		are the first in the world to obtain Rainforest Alliance’s Sustainable AgricultureGuatemala, June 2018.- Guatemalan oil palm plantations Agrocaribe and Agrofrancia, which are part of AgroAmerica corporation, 
		are the first in the world to obtain Rainforest Alliance’s Sustainable Agriculture Guatemalan oil palm plantations Agrocaribe and Agrofrancia, which are part of AgroAmerica corporation, 
		are the first in the world to obtain Rainforest Alliance’s Sustainable Agriculture');
		$news->setText('<p>  Tastes differ. That’s why all people wear different  clothes. Besides they wear different clothes when it is warm and cold. 
		When it  is cold we put on sweaters, coats, caps and gloves. When it’s warm we take off  warm clothes and put on light shirts or blouses and dresses.</p>
		<p>My favourite clothes are jeans, shirts and sweaters or  jackets. They are comfortable. And I can wear them in any weather. Now I’m  wearing jeans, 
		a white shirt and a sweater. But tomorrow is my friend’s  birthday. He invited me to the birthday party. So I shall be in my best.</p>
		<p>My mother bought me a nice suit and new shoes. We went  to the shop together and chose a grey suit. I tried it on. It was my size and  suited me well. 
		I looked great. Mother paid money for the suit and we brought  it home. It’s a pity I didn’t try the shoes on. They were the wrong size. 
		So my  mother changed them for the bigger size. And now they are OK. Frankly speaking,  I don’t like shopping. There are more interesting things. </p>');
		$news->setSmallImage('image1.jpg');
		$manager->persist($news);
		
		
		$news = new News();
		$news->setTitle('AGROAMERICA CELEBRATES ITS CLIENT AWARD ON SUSTAINABILITY');
		$news->setCategoryId('1');
		$news->setShortDescription('<p><strong>New York, May 2018. </strong>AgroAmerica was invited by one of its clients to celebrate its recognition in 
		SUSTAINABILITY in the Gala Dinner that Rainforest Alliance (RF) organizes annually at the History and Art Museum of New York.</p>.');
		$news->setText('<p>  Tastes differ. That’s why all people wear different  clothes. Besides they wear different clothes when it is warm and cold. 
		When it  is cold we put on sweaters, coats, caps and gloves. When it’s warm we take off  warm clothes and put on light shirts or blouses and dresses.</p>
		<p>My favourite clothes are jeans, shirts and sweaters or  jackets. They are comfortable. And I can wear them in any weather. Now I’m  wearing jeans, 
		a white shirt and a sweater. But tomorrow is my friend’s  birthday. He invited me to the birthday party. So I shall be in my best.</p>
		<p>My mother bought me a nice suit and new shoes. We went  to the shop together and chose a grey suit. I tried it on. It was my size and  suited me well. 
		I looked great. Mother paid money for the suit and we brought  it home. It’s a pity I didn’t try the shoes on. They were the wrong size. 
		So my  mother changed them for the bigger size. And now they are OK. Frankly speaking,  I don’t like shopping. There are more interesting things. </p>');
		$news->setSmallImage('image2.jpg');
		$manager->persist($news);
		
		$news = new News();
		$news->setTitle('AGROAMERICA AND CONRED RENEWED ACCREDITATIONS FOR COLRED MEMBERS');
		$news->setCategoryId('2');
		$news->setShortDescription('<p>AgroAmerica and CONRED re-accredited 80 persons, including workers of Agroamerica, and leaders of eleven communities 
		from the three Southwestern departments of Guatemala to be members of Local disaster reduction coordination&nbsp;Network – COLRED – 
		and thus be prepared for this year’s rainy season.</p>');
		$news->setText('<p>  Tastes differ. That’s why all people wear different  clothes. Besides they wear different clothes when it is warm and cold. 
		When it  is cold we put on sweaters, coats, caps and gloves. When it’s warm we take off  warm clothes and put on light shirts or blouses and dresses.</p>
		<p>My favourite clothes are jeans, shirts and sweaters or  jackets. They are comfortable. And I can wear them in any weather. Now I’m  wearing jeans, 
		a white shirt and a sweater. But tomorrow is my friend’s  birthday. He invited me to the birthday party. So I shall be in my best.</p>
		<p>My mother bought me a nice suit and new shoes. We went  to the shop together and chose a grey suit. I tried it on. It was my size and  suited me well. 
		I looked great. Mother paid money for the suit and we brought  it home. It’s a pity I didn’t try the shoes on. They were the wrong size. 
		So my  mother changed them for the bigger size. And now they are OK. Frankly speaking,  I don’t like shopping. There are more interesting things. </p>');
		$news->setSmallImage('image3.jpg');
		$manager->persist($news);
		
		$news = new News();
		$news->setTitle('AGROAMERICA DONATED MEDICAL EQUIPMENT TO RURAL HOSPITALS');
		$news->setCategoryId('2');
		$news->setShortDescription('<p>AgroAmerica donated medical equipment to the hospitals and health centers of the municipalities of Coatepeque and La Blanca, 
		in SouthWestern Guatemala, to help improve the health of the inhabitants of the communities in those municipalities, where most of its workers live.</p>
		<p>“AgroAmerica.</p>');
		$news->setText('<p>  Tastes differ. That’s why all people wear different  clothes. Besides they wear different clothes when it is warm and cold. 
		When it  is cold we put on sweaters, coats, caps and gloves. When it’s warm we take off  warm clothes and put on light shirts or blouses and dresses.</p>
		<p>My favourite clothes are jeans, shirts and sweaters or  jackets. They are comfortable. And I can wear them in any weather. Now I’m  wearing jeans, 
		a white shirt and a sweater. But tomorrow is my friend’s  birthday. He invited me to the birthday party. So I shall be in my best.</p>
		<p>My mother bought me a nice suit and new shoes. We went  to the shop together and chose a grey suit. I tried it on. It was my size and  suited me well. 
		I looked great. Mother paid money for the suit and we brought  it home. It’s a pity I didn’t try the shoes on. They were the wrong size. 
		So my  mother changed them for the bigger size. And now they are OK. Frankly speaking,  I don’t like shopping. There are more interesting things. </p>');
		$news->setSmallImage('image4.jpg');
		$manager->persist($news);
		
		$news = new News();
		$news->setTitle('AGROAMERICA FEMALE WORKERS RECEIVE THE LABOR EXCELLENCE AWARD');
		$news->setCategoryId('1');
		$news->setShortDescription('<p>Six AgroAmerica workers received the 
		<a href="http://www.chapintv.com/actualidad/33-guatemaltecas-reciben-la-orden-de-excelencia-laboral-152234">Labor Excellence Award</a> 
		from Guatemalan President Jimmy Morales on March 7th at a ceremony at the Courtyard.</p>');
		$news->setText('<p>  Tastes differ. That’s why all people wear different  clothes. Besides they wear different clothes when it is warm and cold. 
		When it  is cold we put on sweaters, coats, caps and gloves. When it’s warm we take off  warm clothes and put on light shirts or blouses and dresses.</p>
		<p>My favourite clothes are jeans, shirts and sweaters or  jackets. They are comfortable. And I can wear them in any weather. Now I’m  wearing jeans, 
		a white shirt and a sweater. But tomorrow is my friend’s  birthday. He invited me to the birthday party. So I shall be in my best.</p>
		<p>My mother bought me a nice suit and new shoes. We went  to the shop together and chose a grey suit. I tried it on. It was my size and  suited me well. 
		I looked great. Mother paid money for the suit and we brought  it home. It’s a pity I didn’t try the shoes on. They were the wrong size. 
		So my  mother changed them for the bigger size. And now they are OK. Frankly speaking,  I don’t like shopping. There are more interesting things. </p>');
		$news->setSmallImage('image5.jpg');
		$manager->persist($news);
		
		$news = new News();
		$news->setTitle('HUMAN RIGHTS MONTH AGROAMERICA PROGRAMS FOR HEALTH & DIGNITY');
		$news->setCategoryId('3');
		$news->setShortDescription('<p>The Government of Guatemala has many programs in place to address the issues of Human Rights. However, 
		Jordan Rojas, head of the Human Rights Ombudsman.</p>');
		$news->setText('<p>  Tastes differ. That’s why all people wear different  clothes. Besides they wear different clothes when it is warm and cold. 
		When it  is cold we put on sweaters, coats, caps and gloves. When it’s warm we take off  warm clothes and put on light shirts or blouses and dresses.</p>
		<p>My favourite clothes are jeans, shirts and sweaters or  jackets. They are comfortable. And I can wear them in any weather. Now I’m  wearing jeans, 
		a white shirt and a sweater. But tomorrow is my friend’s  birthday. He invited me to the birthday party. So I shall be in my best.</p>
		<p>My mother bought me a nice suit and new shoes. We went  to the shop together and chose a grey suit. I tried it on. It was my size and  suited me well. 
		I looked great. Mother paid money for the suit and we brought  it home. It’s a pity I didn’t try the shoes on. They were the wrong size. 
		So my  mother changed them for the bigger size. And now they are OK. Frankly speaking,  I don’t like shopping. There are more interesting things. </p>');
		$news->setSmallImage('image6.jpg');
		$manager->persist($news);
		
		$news = new News();
		$news->setTitle('AGROAMERICA’S FOOD SECURITY PROGRAM BENEFITS THOUSANDS OF CHILDREN IN RURAL GUATEMALA');
		$news->setCategoryId('3');
		$news->setShortDescription('<p>In 2017 6180 children at 16 rural schools in Quetzaltenango, San Marcos, Retalhuleu and Escuintla in 
		the southwest region of Guatemala.</p>');
		$news->setText('<p>  Tastes differ. That’s why all people wear different  clothes. Besides they wear different clothes when it is warm and cold. 
		When it  is cold we put on sweaters, coats, caps and gloves. When it’s warm we take off  warm clothes and put on light shirts or blouses and dresses.</p>
		<p>My favourite clothes are jeans, shirts and sweaters or  jackets. They are comfortable. And I can wear them in any weather. Now I’m  wearing jeans, 
		a white shirt and a sweater. But tomorrow is my friend’s  birthday. He invited me to the birthday party. So I shall be in my best.</p>
		<p>My mother bought me a nice suit and new shoes. We went  to the shop together and chose a grey suit. I tried it on. It was my size and  suited me well. 
		I looked great. Mother paid money for the suit and we brought  it home. It’s a pity I didn’t try the shoes on. They were the wrong size. 
		So my  mother changed them for the bigger size. And now they are OK. Frankly speaking,  I don’t like shopping. There are more interesting things. </p>');
		$news->setSmallImage('image7.jpg');
		$manager->persist($news);
		
		$news = new News();
		$news->setTitle('AGROAMERICA SHARES WATER MANAGEMENT EXPERTISE');
		$news->setCategoryId('3');
		$news->setShortDescription('<p>AgroAmerica engineers shared their water management expertise on responsible at the 
		<a href="http://icc.org.gt/en/1st-conference-for-integrated-water-management-begins/" target="_blank" rel="noopener noreferrer"><em>1st 
		Integrated Water Management Congress</em> </a>held recently in Guatemala.</p>');
		$news->setText('<p>  Tastes differ. That’s why all people wear different  clothes. Besides they wear different clothes when it is warm and cold. 
		When it  is cold we put on sweaters, coats, caps and gloves. When it’s warm we take off  warm clothes and put on light shirts or blouses and dresses.</p>
		<p>My favourite clothes are jeans, shirts and sweaters or  jackets. They are comfortable. And I can wear them in any weather. Now I’m  wearing jeans, 
		a white shirt and a sweater. But tomorrow is my friend’s  birthday. He invited me to the birthday party. So I shall be in my best.</p>
		<p>My mother bought me a nice suit and new shoes. We went  to the shop together and chose a grey suit. I tried it on. It was my size and  suited me well. 
		I looked great. Mother paid money for the suit and we brought  it home. It’s a pity I didn’t try the shoes on. They were the wrong size. 
		So my  mother changed them for the bigger size. And now they are OK. Frankly speaking,  I don’t like shopping. There are more interesting things. </p>');
		$news->setSmallImage('image8.jpg');
		$manager->persist($news);
		
        $manager->flush();
    }
}
