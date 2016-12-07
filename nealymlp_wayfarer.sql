-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2016 at 06:37 AM
-- Server version: 10.1.18-MariaDB-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nealymlp_wayfarer`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_data`
--

CREATE TABLE IF NOT EXISTS `city_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `landmark_one` varchar(255) NOT NULL,
  `description_one` mediumtext NOT NULL,
  `landmark_two` varchar(255) NOT NULL,
  `description_two` mediumtext NOT NULL,
  `landmark_three` varchar(255) NOT NULL,
  `description_three` mediumtext NOT NULL,
  `landmark_four` varchar(255) NOT NULL,
  `description_four` mediumtext NOT NULL,
  `tipping` varchar(255) NOT NULL,
  `peak_season` varchar(255) NOT NULL,
  `average_beer` varchar(255) NOT NULL,
  `food_one` varchar(255) NOT NULL,
  `food_two` varchar(255) NOT NULL,
  `food_three` varchar(255) NOT NULL,
  `transport_one` varchar(255) NOT NULL,
  `transport_two` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `timezone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `city_data`
--

INSERT INTO `city_data` (`id`, `city`, `language`, `passport`, `landmark_one`, `description_one`, `landmark_two`, `description_two`, `landmark_three`, `description_three`, `landmark_four`, `description_four`, `tipping`, `peak_season`, `average_beer`, `food_one`, `food_two`, `food_three`, `transport_one`, `transport_two`, `description`, `timezone`) VALUES
(1, 'London', 'English', 'Passport', 'Buckingham Palace', 'Buckingham Palace is the London residence and administrative headquarters of the reigning monarch of the United Kingdom. Located in the City of Westminster, the palace is often at the centre of state occasions and royal hospitality.', 'Tower Bridge', 'Tower Bridge is a combined bascule and suspension bridge in London built in 1886 - 1894. The bridge crosses the River Thames close to the Tower of London and has become an iconic symbol of London.', 'London Eye', 'One of the world''s largest Ferris Wheels. Gives a perfect view of London.The London Eye is a giant Ferris wheel on the South Bank of the River Thames in London. The structure is 443 feet (135 m) tall and the wheel has a diameter of 394 feet (120 m). When erected in 1999 it was the world''s tallest Ferris wheel.', 'Tower of London', 'The Tower of London, officially Her Majesty''s Royal Palace and Fortress of the Tower of London, is a historic castle located on the north bank of the River Thames in central London.', 'Not required', 'June - August', '5.16 GBP ($8.71 AUD)', 'English Breakfast', 'Bangers and Mash', 'Fish and Chips', 'London Taxi Cabs', 'London Underground', 'London, the capital of England and the United Kingdom, is a 21st-century city with history stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the iconic Big Ben clock tower and Westminster Abbey, site of British monarch coronations. Across the Thames River, the London Eye observation wheel provides panoramic views of the South Bank cultural complex, and the entire city.', 0),
(2, 'Brisbane', 'English', 'Passport', 'The Big Pineapple', 'The Big Pineapple is a heritage-listed tourist attraction on the Sunshine Coast in South East Queensland, Australia. It is 16 metres high and was originally opened on the 15 of August 1971.', 'Boggo Road Gaol', 'Boggo Road Gaol was a notorious and heritage-listed Australian prison located on Annerley Road in Dutton Park, an inner southern suburb of Brisbane, Queensland, Australia. ', 'Storey Bridge', 'The Story Bridge is a heritage-listed steel cantilever bridge spanning the Brisbane River that carries vehicular, bicycle and pedestrian traffic between the northern and the southern suburbs of Brisbane, Queensland, Australia.', 'The Wheel Of Brisbane', 'The Story Bridge is a heritage-listed steel cantilever bridge spanning the Brisbane River that carries vehicular, bicycle and pedestrian traffic between the northern and the southern suburbs of Brisbane, Queensland, Australia.The Wheel of Brisbane is recognised as one of the most exciting additions to the Brisbane City Skyline. You will be inspired by the breathtaking views across the iconic Brisbane River.', 'Not required', 'December - Febuary', '$8.00 AUD', 'Vegemite', 'Backyard BBQ&#039;s', 'Lamingtons', 'Brisbane Bus Service', 'Uber', 'Brisbane, capital of Queensland, is a large city on the Brisbane River. Clustered in its South Bank cultural precinct are the Queensland Museum and Sciencentre, with noted interactive exhibitions. Another South Bank cultural institution is Queensland Gallery of Modern Art, among Australia''s major contemporary art museums. Looming over the city is Mt. Coot-tha, site of Brisbane Botanic Gardens.', 600),
(3, 'Istanbul', 'Turkish', 'Passport', 'Topkapi Palace', 'The Topkapi Palace or the Seraglio is a large palace in Istanbul, Turkey that was one of the major residences of the Ottoman sultans for almost 400 years of their 624-year reign.', 'Galata Tower', 'The Galata Tower â€” called Christea Turris by the Genoese â€” is a medieval stone tower in the Galata/KarakÃ¶y quarter of Istanbul, Turkey, just to the north of the Golden Horn&#039;s junction with the Bosphorus.', 'Hagia Sophia', 'Hagia Sophia is a great architectural beauty and an important monument both for Byzantine and for Ottoman Empires. Once a church, later a mosque, and now a museum at the Turkish Republic, Hagia Sophia has always been the precious of its time.', 'Maidens Tower', 'The Maiden&#039;s Tower, also known as Leander&#039;s Tower since the medieval Byzantine period, is a tower lying on a small islet located at the southern entrance of the Bosphorus strait 200 m from the coast of ÃœskÃ¼dar in Istanbul, Turkey.', '5%-10%', 'June - August', '8.00 TL ($3.04 AUD)', 'Corba', 'Kebabs', 'KÃ¶fte meatballs', 'Istanbul Rail', 'Metrobus', 'Istanbul is a major city in Turkey that straddles Europe and Asia across the Bosphorus Strait. Its Old City reflects cultural influences of the many empires that once ruled here. In the Sultanahmet district, the open-air, Roman-era Hippodrome was for centuries the site of chariot races, and Egyptian obelisks also remain. The iconic Byzantine Hagia Sophia features a soaring 6th-century dome and rare Christian mosaics.', 180),
(4, 'Marrakech', 'Arabic', 'Passport', 'Bab Agnaou Gate', 'Bab Agnaou is one of the nineteen gates of Marrakesh, Morocco. It was built in the 12th century in the time of the Almohad dynasty.', 'Ben Youssef Madrasa', 'The Ben Youssef Madrasa was an Islamic college in Marrakesh, Morocco, named after the Almoravid sultan Ali ibn Yusuf, who expanded the city and its influence considerably. It is the largest Medrasa in all of Morocco. ', 'Majorelle Garden', 'The Majorelle Garden hadiqat mmajuril, is a twelve-acre botanical garden and artist&#039;s landscape garden in Marrakech, Morocco. An archaeological museum, it contains the Islamic Art Museum of Marrakech.', 'Bahia Palace', 'The Bahia Palace is a palace and a set of gardens located in Marrakesh, Morocco. It was built in the late 19th century, intended to be the greatest palace of its time. The name means "brilliance".', '10%', 'March - August', '25 Moroccan Dirhams ($3.36 AUD)', 'Couscous', 'Kefta Tagine', 'Mint Tea', 'Public Buses (~5 Dirhams)', 'Petits Taxis', 'Marrakech, a former imperial city in western Morocco, is a major economic center and home to mosques, palaces and gardens. The medina is a densely packed, walled medieval city dating to the Berber Empire, with mazelike alleys where thriving souks (marketplaces) sell traditional textiles, pottery and jewelry. A symbol of the city, and visible for miles, is the Moorish minaret of 12th-century Koutoubia Mosque.', 0),
(5, 'Paris', 'French', 'Passport', 'Arc de Triomphe', 'One of the most famous monuments in Paris, standing at the western end of the Champs-Ã‰lysÃ©es at the center of Place Charles de Gaulle, formerly named Place de l&#039;Ã‰toile â€” the Ã©toile or &quot;star&quot; of the juncture formed by its twelve radiating avenues.', 'Eiffel Tower', 'The Eiffel Tower is a wrought iron lattice tower on the Champ de Mars in Paris, France. It is named after the engineer Gustave Eiffel, whose company designed and built the tower.', 'Jardin du Luxembourg', 'The Jardin du Luxembourg, or the Luxembourg Garden, located in the 6th arrondissement of Paris, was created beginning in 1612 by Marie de&#039; Medici, the widow of King Henry IV of France, for a new residence she constructed, the Luxembourg Palace.', 'Notre Dame de Paris', 'Notre-Dame de Paris, also known as Notre-Dame Cathedral or simply Notre-Dame, is a medieval Catholic cathedral on the ÃŽle de la CitÃ© in the fourth arrondissement of Paris, France.', '5%', 'July - August', '5.00 Euros ($7.22 AUD)', 'Croque-Monsieur', 'Bouillabaisse', 'Macarons', 'MÃ©tro de Paris (Paris Metro)', 'Walk or Bus. (Driving should be avoided)', 'Paris, France''s capital, is a major European city and a global center for art, fashion, gastronomy and culture. Its 19th-century cityscape is crisscrossed by wide boulevards and the River Seine. Beyond such landmarks as the Eiffel Tower and the 12th-century, Gothic Notre-Dame cathedral, the city is known for its cafe culture and designer boutiques along the Rue du Faubourg Saint-Honore.', 60),
(6, 'Siem Reap', 'Khmer/French', 'Passport and Visa', 'Angkor Thom Gate', 'The entry way to Angkor Thom.', 'Angkor Thom', 'Angkor Thom, located in present-day Cambodia, was the last and most enduring capital city of the Khmer empire. It was established in the late twelfth century by King Jayavarman VII.', 'Banteay Srei', 'Banteay Srei or Banteay Srey is a 10th-century Cambodian temple dedicated to the Hindu god Shiva. Located in the area of Angkor in Cambodia.', 'Siem Reap Royal Palace', 'The Royal residence is the kings residence, in the town of Siem Reap. It is set apart for his highness the king of Cambodia, when he visits Siem Reap.', '10%', 'November - January', '5,000 KHR ($1.25 AUD)', 'Amok Fish', 'Nom Banh Chok (khmer Nooodles)', 'Chili Fried Insects', 'Tuk Tuks', 'Unmarked Taxi', 'Siem Reap, a resort town in northwestern Cambodia, is the gateway to the ruins of Angkor, the seat of the Khmer kingdom from the 9th-15th centuries. Angkor''s vast complex of intricate stone buildings includes preserved Angkor Wat, the main temple, which is pictured on Cambodia''s flag. Giant, mysterious faces are carved into the Bayon Temple at Angkor Thom.', 420),
(7, 'Prague', 'Czech', 'Passport', 'Prague Astronomical Clocktower', 'The Prague astronomical clock, or Prague orloj, is a medieval astronomical clock located in Prague, the capital of the Czech Republic.', 'Old Town Square', 'Old Town Square is a historic square in the Old Town quarter of Prague, the capital of the Czech Republic. It is located between Wenceslas Square and the Charles Bridge.', 'Prague Castle', 'Prague Castle is a castle complex in Prague, Czech Republic, dating from the 9th century. It is the official residence of the President of the Czech Republic.', 'Town Square Fountain', 'A historic Fountain located conveniently in Prague&#039;s town square.', '10%', 'June - August / December', '23 CZK ($2.23 AUD)', 'Goulash', 'Beer', 'PalaÄinky Pancakes', 'Taxi&#039;s', 'Walking', 'Prague, capital city of the Czech Republic, is bisected by the Vltava River. Nicknamed "the City of a Hundred Spires," it''s known for its Old Town Square, the heart of its historic core, with colourful baroque buildings, Gothic churches and the medieval Astronomical Clock, which gives an animated hourly show. Completed in 1402, pedestrian Charles Bridge is lined with statues of Catholic saints.', 60),
(8, 'Rome', 'Italian', 'Passport', 'Altare della Patria', 'The Altare della Patria, also known as the Monumento Nazionale a Vittorio Emanuele II or Il Vittoriano, is a monument built in honor of Victor Emmanuel, the first king of a unified Italy, located in Rome, Italy.', 'Colosseum', 'The Colosseum or Coliseum, also known as the Flavian Amphitheatre, is an oval amphitheatre in the centre of the city of Rome, Italy. Built of concrete and sand, it is the largest amphitheatre ever built.', 'Galleria Borghese', 'The Galleria Borghese is an art gallery in Rome, Italy, housed in the former Villa Borghese Pinciana.', 'Pantheon', 'The Pantheon is a former Roman temple, now a church, in Rome, Italy, on the site of an earlier temple commissioned by Marcus Agrippa during the reign of Augustus.', '10% in tourist areas', 'May - August', '5.00 EUR ($7.20 AUD)', 'Pasta', 'Pizza', 'Bruschetta with Olive Oil', 'Hire a Vespa', 'Metro System', 'Rome, Italy''s capital, is a sprawling, cosmopolitan city with nearly 3,000 years of globally influential art, architecture and culture on display. Ancient ruins such as the Forum and the Colosseum evoke the power of the former Roman Empire. Vatican City, headquarters of the Roman Catholic Church, has St. Peter''s Basilica and the Vatican Museums, which house masterpieces such as Michelangelo''s Sistine Chapel frescoes.', 60),
(9, 'Hanoi', 'Vietnamese', 'Passport and Visa', 'Tráº¥n Quá»‘c Pagoda', 'Tráº¥n Quá»‘c Pagoda, the oldest Buddhist temple in Hanoi, is located on a small island near the southeastern shore of Hanoi&#039;s West Lake, Vietnam.', 'HoÃ n Kiáº¿m Lake', 'Hoan Kiem Lake, also known as Há»“ GÆ°Æ¡m, is a lake in the historical center of Hanoi, the capital city of Vietnam. The lake is one of the major scenic spots in the city and serves as a focal point for its public life.', 'Ho Chi Minh Mausoleum', 'The Ho Chi Minh Mausoleum is the largest memorial in Hanoi, Vietnam. It is located in the center of Ba Dinh Square, which is the place where Vietminh leader Ho Chi Minh, Chairman of the Communist party of Vietnam from 1951 until his death in 1969.', 'VÄƒn Miáº¿u - Quá»‘c Tá»­ GiÃ¡m, Hanoi', 'VÄƒn Miáº¿u - Quá»‘c Tá»­ GiÃ¡m is a Temple of Confucius in Hanoi, northern Vietnam. The temple hosts the &quot;Imperial Academy&quot;, Vietnam&#039;s first national university. The temple was built in 1070 at the time of Emperor LÃ½ ThÃ¡nh TÃ´ng.', '5%', 'March - May / October - December', '30,000 VND ($1.60 AUD)', 'Phá»Ÿ (noodle soup)', 'Bun Nem (Spring Rolls)', 'NÆ°á»›c mÃ­a (sugarcane juice)', 'Tuk Tuks', 'Scooters', 'Hanoi, the capital of Vietnam, is known for its centuries-old architecture and a rich culture with Southeast Asian, Chinese and French influences. At its heart is the chaotic Old Quarter, where the narrow streets are roughly arranged by trade. There are many little temples, including Bach Ma, honoring a legendary horse, plus Dong Xuan Market, selling household goods and street food.', 420),
(10, 'New York City', 'English', 'Passport under Visa Waiver program', 'Statue of Liberty', 'The Statue of Liberty is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York City, in the United States.', 'Empire State Building', 'The Empire State Building is a 102-story skyscraper located on Fifth Avenue between West 33rd and 34th Streets in Midtown, Manhattan, New York City.', 'The Met', 'The Metropolitan Museum of Art, colloquially "The Met", is located in New York City. It is the largest art museum in the United States, and is among the most visited art museums in the world.', 'Grand Central Station', 'Grand Central Terminal is a commuter, rapid transit railroad terminal at 42nd Street and Park Avenue in Midtown Manhattan in New York City, United States.', '15%-20%', 'June - August / December - January', '6.00 USD ($8.08 AUD)', 'Bagels', 'New York Pizza', 'New York Cheesecake', 'Subway', 'New York Taxi Cab / Walk', 'New York City comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. At its core is Manhattan, a densely populated borough that''s among the world''s major commercial, financial and cultural centres. Its iconic sites include skyscrapers such as the Empire State Building and sprawling Central Park. Broadway theatre is staged in neon-lit Times Square.', -300),
(11, 'Tokyo', 'Japanese', 'Passport', 'Meiji Shrine', 'Meiji Shrine, located in Shibuya, Tokyo, is the Shinto shrine that is dedicated to the deified spirits of Emperor Meiji and his wife, the Empress.', 'Tokyo Tower', 'Tokyo Tower is a communications and observation tower in the Shiba-koen district of Minato, Tokyo, Japan. At 332.9 metres, it is the second-tallest structure in Japan.', 'Shibuya', 'Shibuya is a special ward in Tokyo, Japan. As of May 1, 2016, it has an estimated population of 221,801 and a population density of 14,679.09 people per km squared. The total area is 15.11 km squared.', 'Shinjuku Gyoen', 'Shinjuku Gyoen National Garden is a large park with an eminent garden in Shinjuku and Shibuya, Tokyo, Japan. About 31% of the park''s area is in Shibuya Ward, with the remaining 69% in Shinjuku Ward.', 'Not required', 'March - May', '800 YEN ($9.43 AUD)', 'Sushi', 'Ramen', 'Matcha Tea', 'JR Trains', 'Walk', 'Tokyo, Japan''s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples. The opulent Meiji Shinto Shrine is known for its towering gate and surrounding woods. The Imperial Palace sits amid large public gardens. The city''s many museums offer exhibits ranging from classical art (in the Tokyo National Museum) to a reconstructed kabuki theater (in the Edo-Tokyo Museum).', 540),
(12, 'Edinburgh', 'English', 'Passport', 'Edinburgh Castle ', 'Edinburgh Castle is a historic fortress which dominates the skyline of the city of Edinburgh, Scotland, from its position on the Castle Rock.', 'The Elephant House', 'The Elephant House is a gourmet tea and coffee shop located in the heart of historic Edinburgh. It became famous since its 1995 opening as the place of inspiration to JK Rowling as she wrote the Harry Potter series.', 'Scott Monument', 'The Scott Monument is a Victorian Gothic monument to Scottish author Sir Walter Scott. It is the largest monument to a writer in the world.', 'Holyrood Palace', 'The Palace of Holyroodhouse, commonly referred to as Holyrood Palace, is the official residence of the British monarch in Scotland.', '0% - 10%', 'July - August', '4.50 GBP ($7.67 AUD)', 'Haggis', 'Full Scottish Breakfast', 'Whiskey', 'Walk', 'Taxi', 'Edinburgh is Scotland''s compact, hilly capital. It has a medieval Old Town and elegant Georgian New Town with gardens and neoclassical buildings. Looming over the city is Edinburgh Castle, home to Scotland''s crown jewels and the Stone of Destiny, used in the coronation of Scottish rulers. Arthur''s Seat is an imposing peak in Holyrood Park with sweeping views, and Calton Hill is topped with monuments and memorials.', 0),
(13, 'San Francisco', 'English', 'Passport under Visa Waiver program', 'Alcatraz', 'The Alcatraz Federal Penitentiary or United States Penitentiary, Alcatraz Island was a maximum high-security federal prison on Alcatraz Island, 1.25 miles off the coast of San Francisco, California, which operated from 1934 to 1963.', 'Lombard Street', 'Lombard Street is an eastâ€“west street in San Francisco, California that is famous for a steep, one-block section with eight hairpin turns.', 'Golden Gate Bridge', 'The Golden Gate Bridge is a suspension bridge spanning the Golden Gate strait, the one-mile-wide, three-mile-long channel between San Francisco Bay and the Pacific Ocean.', 'Palace of Fine Arts', 'The Palace of Fine Arts in the Marina District of San Francisco, California, is a monumental structure originally constructed for the 1915 Panama-Pacific Exposition in order to exhibit works of art presented there.', '15%-20%', 'June - August', '6 USD ($8.08 AUD)', 'Dungeness Crab', 'Crusty Sourdough French Bread', 'It&#039;s It Ice Cream Sandwich', 'Uber', 'San Fran Tram Service', 'San Francisco, in northern California, is a hilly city on the tip of a peninsula surrounded by the Pacific Ocean and San Francisco Bay. It''s known for its year-round fog, iconic Golden Gate Bridge, cable cars and colorful Victorian houses. The Financial District''s Transamerica Pyramid is its most distinctive skyscraper. In the bay sits Alcatraz Island, site of the notorious former prison.', -420),
(14, 'Queenstown', 'English', 'Passport', 'The Shire', 'The Hobbiton Movie Set was a significant location used for The Lord of the Rings film trilogy and The Hobbit film series.', 'Milford Sound', 'Milford Sound / Piopiotahi is a fiord in the south west of New Zealand&#039;s South Island, within Fiordland National Park, Piopiotahi Marine Reserve, and the Te Wahipounamu World Heritage site.', 'Sky Tower', 'Although not in Queenstown, the Sky tower is worth checking out. The Sky Tower is an observation and telecommunications tower located at the corner of Victoria and Federal Streets in the Auckland CBD, Auckland, New Zealand.', 'Queenstown Ski Fields', 'Two of the world&#039;s best ski slopes, Coronet Peak and The Remarkables more than live up to their name. If extreme sports are your middle name, then these are some slopes that desperately need you to tear them up.', '0% - 10%', 'December - Febuary / July - September', '9 NZD ($8.63 AUD)', 'Hokey Pokey Ice Cream', 'Tuatua (Shellfish)', 'Hangi', 'Hire a Car', 'Walk / Uber', 'Queenstown, New Zealand, sits on the shores of the South Island''s Lake Wakatipu, set against the dramatic Southern Alps. Renowned for adventure sports, it''s also a base for exploring the region''s vineyards and historic mining towns. There''s bungee jumping off Kawarau Gorge Suspension Bridge and jet-boating on the Shotover and Dart rivers. In winter, there''s skiing on the slopes of The Remarkables and Coronet Peak.', 720),
(15, 'Sydney', 'English', 'Passport', 'Sydney Opera House', 'The Sydney Opera House is a multi-venue performing arts centre in Sydney, Australia. It is one of the 20th century&#039;s most famous and distinctive buildings.', 'Sydney Harbour Bridge', 'The Sydney Harbour Bridge is a steel through arch bridge across Sydney Harbour that carries rail, vehicular, bicycle, and pedestrian traffic between the Sydney central business district and the North Shore.', 'Luna Park', 'Luna Park Sydney is an amusement park located in Sydney, New South Wales, Australia. Luna Park is located at Milsons Point, on the northern shore of Sydney Harbour.', 'Bondi Beach', 'Bondi Beach is a popular beach and is one of the most visited tourist sites in Australia. Bondi Beach is located 7 km (4 mi) east of the Sydney central business district.', 'Not required', 'December - Febuary', '$9.00 AUD', 'Meat Pie', 'Vegemite', 'Pavlova', 'Sydney Buses', 'Uber / Taxi''s', 'Sydney, capital of New South Wales and one of Australia''s largest cities, is best known for its harbourfront Sydney Opera House, with a distinctive sail-like design. Massive Darling Harbour and the smaller Circular Quay port are hubs of waterside life, with the arched Harbour Bridge and esteemed Royal Botanic Garden nearby. Sydney Tower''s outdoor platform, the Skywalk, offers 360-degree views of the city and suburbs.', 600),
(16, 'Rio De Janeiro', 'Portugese', 'Passport and Visa', 'MaracanÃ£ Stadium', 'MaracanÃ£, officially called EstÃ¡dio MÃ¡rio Filho, was built to serve as the flagship venue for the 1950 World Cup. It was meant to become the biggest football stadium in the world.', 'Sugarloaf Mountains', 'Sugarloaf Mountain is a peak situated in Rio de Janeiro, Brazil, at the mouth of Guanabara Bay on a peninsula that juts out into the Atlantic Ocean. ', 'Carioca Aqueduct', 'The Carioca Aqueduct is an aqueduct in the city of Rio de Janeiro, Brazil. The aqueduct was built in the middle of the 18th century to bring fresh water from the Carioca river to the population of the city.', 'Corcavado', 'Corcovado hill lies just west of the city center but is wholly within the city limits and visible from great distances. It is known worldwide for the 38-metre (125 ft) statue of Jesus atop its peak, entitled Cristo Redentor or &quot;Christ the Redeemer&quot;.', '10%', 'December - March', '8.30 BRL ($3.28 AUD)', 'Churrascaria (BBQ)', 'Moqueca', 'Brigadeiros', 'Public Bike Sharing', 'Metro System', 'Rio de Janeiro is a huge seaside city in Brazil, famed for its Copacabana and Ipanema beaches, 38m Christ the Redeemer statue atop Mount Corcovado and for Sugarloaf Mountain, a granite peak with cable cars to its summit. The city is also known for its sprawling favelas (shanty towns). Its raucous Carnaval festival, featuring parade floats, flamboyant costumes and samba dancers, is considered the world''s largest.', -120),
(17, 'Dubai', 'Arabic', 'Passport and Visa', 'Burj Al Arab', 'Set on an island in a striking sail-shaped building, this luxury hotel is a 5-minute walk from Wild Wadi Water Park and 4 km from Mall of the Emirates.', 'Dubai Waterfront', 'The Dubai Waterfront (now known as Waterfront) was expected to become the largest waterfront and largest man-made development in the world. The project is a conglomeration of canals and artificial archipelago; it would occupy the last remaining Persian Gulf coastline of Dubai, the most populous emirate of the United Arab Emirates.', 'Cayan Tower', 'Cayan Tower, known as Infinity Tower before it was inaugurated, is a 306-metre-tall, 73-story skyscraper in Dubai, United Arab Emirates by Cayan Real Estate Investment and Development.', 'burj khalifa', 'The Burj Khalifa, known as the Burj Dubai before its inauguration, is a megatall skyscraper in Dubai, United Arab Emirates. It is the tallest structure in the world, standing at 829.8 metres!', '5%-10%', 'November - March', '25 Dirham AED ($9.16 AUD)', 'Shisha / Hookah Waterpipe', 'Arabic Coffee', 'Shawarma Grilled Meat', 'Public Transport (metro, Tram or Monorail)', 'Hire a luxury car!', 'Dubai is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern architecture and a lively nightlife scene. Burj Khalifa, an 830m-tall tower, dominates the skyscraper-filled skyline. At its foot lies Dubai Fountain, with jets and lights choreographed to music. On artificial islands just offshore is Atlantis, The Palm, a resort with water and marine-animal parks.', 240),
(18, 'Amsterdam', 'Dutch', 'Passport', 'Windmills', 'Windmills are an iconic part of the Dutch landscape, and a visit to one is a must for visitors to the Netherlands. And with eight windmills located in and around Amsterdam, windmill spotting is a great way to see the city.', 'Rijksmuseum', 'The Rijksmuseum is a Dutch national museum dedicated to arts and history in Amsterdam. The museum is located at the Museum Square in the borough Amsterdam South, close to the Van Gogh Museum, the Stedelijk Museum Amsterdam, and the Concertgebouw.', 'Singel', 'The Singel is a canal in Amsterdam which encircled the city in the Middle Ages. It served as a moat around the city until 1585, when Amsterdam expanded beyond the Singel. Many houses along the canals have started to sink over time, and lean against one another.', 'Van Gogh Museum', 'The Van Gogh Museum is an art museum dedicated to the works of Vincent van Gogh and his contemporaries in Amsterdam.', '5%-10%', 'July - August', ' 2.70 EURO ($3.90 AUD)', 'Stroopwafels', 'Dutch Beer', 'Rookworst', 'Trams Service', 'Walk (inner city area)', 'Amsterdam is the Netherlands'' capital, known for its artistic heritage, elaborate canal system and narrow houses with gabled facades, legacies of the city''s 17th-century Golden Age. Its Museum District houses the Van Gogh Museum, works by Rembrandt and Vermeer at the Rijksmuseum, and modern art at the Stedelijk. Cycling is key to the city''s character, and there are numerous bike paths.', 60),
(19, 'Bangkok', 'Thai', 'Passport and Visa', 'Wat Arun', 'Wat Arun Ratchawararam Ratchawaramahawihan or Wat Arun is a Buddhist temple in Bangkok Yai district of Bangkok, Thailand, on the Thonburi west bank of the Chao Phraya River.', 'The Grand Palace', 'The Grand Palace is a complex of buildings at the heart of Bangkok, Thailand. The palace has been the official residence of the Kings of Siam since 1782.', 'The Golden Buddha', 'The Golden Buddha, officially titled Phra Phuttha Maha Suwana Patimakon, is a gold statue, with a weight of 5.5 tons. It is located in the temple of Wat Traimit, Bangkok, Thailand.', 'Wat Saket', 'Wat Saket Ratcha Wora Maha Wihan is a Buddhist temple in Pom Prap Sattru Phai district, Bangkok, Thailand. The temple dates back to the Ayutthaya era, when it was known as Wat Sakae.', 'Not required', 'November - February', '125 Baht ($4.72 AUD)', 'Pat Tai', 'Tom Yam', 'Lod Chong Singapore', 'Taxi&#039;s', 'Tuk Tuk', 'Bangkok, Thailand''s capital, is a large city known for ornate shrines and vibrant street life. The boat-filled Chao Phraya River feeds its network of canals, flowing past the Rattanakosin royal district, home to opulent Grand Palace and its sacred Wat Phra Kaew Temple. Nearby is Wat Pho Temple with an enormous reclining Buddha and, on the opposite shore, Wat Arun Temple with its steep steps and Khmer-style spire.', 420),
(20, 'Lisbon', 'Portugese', 'Passport', 'SÃ£o Jorge Castle', 'SÃ£o Jorge Castle is a Moorish castle occupying a commanding hilltop overlooking the historic centre of the Portuguese city of Lisbon and Tagus River.', 'Alfama Neighbourhood', 'Alfama is Lisbonâ€™s oldest neighbourhood, its most traditional and charming. One of the only districts to be spared from the devastating earthquake of 1755, Alfama is the historic soul of Lisbon and its steep, cobblestoned lanes stand just as they were in medieval times.', 'Belem Tower', 'BelÃ©m Tower or the Tower of St Vincent is a fortified tower located in the civil parish of Santa Maria de BelÃ©m in the municipality of Lisbon, Portugal.', 'The PraÃ§a do ComÃ©rcio', 'The PraÃ§a do ComÃ©rcio is located in the city of Lisbon, Portugal. Situated near the Tagus river, the square is still commonly known as Terreiro do PaÃ§o.', '0% - 10%', 'June - August', '2 EUR ($2.88 AUD)', 'Bacalhau (Sale Cod)', 'Caldo Verde (Green Soup)', 'Ginjinha (Sweet Cherry Liquor)', 'Lisbon Metro', 'Public Transport', 'Lisbon is Portugal''s hilly, coastal capital city. From imposing Sao Jorge Castle, the view encompasses the old city''s pastel-colored buildings, Tagus Estuary and Ponte 25 de Abril suspension bridge. Nearby, the National Azulejo Museum displays five centuries of decorative ceramic tiles. Just outside Lisbon is a string of Atlantic beaches, from Cascais to Estoril.', 0),
(21, 'St Petersburg', 'Russian', 'Passport and Visa', 'St. Isaac&#039;s Cathedral', 'Saint Isaac&#039;s Cathedral or Isaakievskiy Sobor in Saint Petersburg, Russia, is the largest Russian Orthodox cathedral in the city. It is the largest orthodox basilica and the fourth largest cathedral in the world.', 'Church of the Savior on Blood', 'This church was built on the site where Emperor Alexander II was fatally wounded in March 1881.The church was built between 1883 and 1907. The construction was funded by the imperial family.', 'Peter and Paul Fortress', 'The Peter and Paul Fortress is the original citadel of St. Petersburg, Russia, founded by Peter the Great in 1703 and built to Domenico Trezzini''s designs from 1706 to 1740.', 'Kazan Cathedral', 'Kazan Cathedral or Kazanskiy Kafedralniy Sobor, also known as the Cathedral of Our Lady of Kazan, is a cathedral of the Russian Orthodox Church on the Nevsky Prospekt in Saint Petersburg.', '10% - 15%', 'July - August / November - February', '160 RUB ($2.53 AUD)', 'Borscht', 'Stroganoff', 'Vodka', 'Horse and Carriage', 'Public Transport', 'St. Petersburg is a Russian port city on the Baltic Sea. It was the imperial capital for 2 centuries, having been founded in 1703 by Peter the Great, subject of the city''s iconic "Bronze Horseman" statue. It remains Russia''s cultural center, with venues like the ultramodern Mariinsky Theatre hosting opera and ballet, and the State Russian Museum showcasing Russian art, from Orthodox icon paintings to Kandinsky works.', 180);

-- --------------------------------------------------------

--
-- Table structure for table `continent`
--

CREATE TABLE IF NOT EXISTS `continent` (
  `id` int(128) NOT NULL,
  `name` int(128) NOT NULL,
  `landmarks` int(128) NOT NULL,
  `population` int(128) NOT NULL,
  `size` int(128) NOT NULL,
  `continent_coordinates` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `continent`
--

INSERT INTO `continent` (`id`, `name`, `landmarks`, `population`, `size`, `continent_coordinates`) VALUES
(0, 0, 0, 23, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `Id` int(128) NOT NULL,
  `country_name` varchar(128) NOT NULL,
  `currency` varchar(128) NOT NULL,
  `language` varchar(128) NOT NULL,
  `country_coordinates` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Id`, `country_name`, `currency`, `language`, `country_coordinates`) VALUES
(0, 'sdfsd', 'sdfsdf', 'sdfsdf', 'sdfd'),
(0, 'Fuck', 'you ', 'ya', 'bitch');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `R_TITLE` text NOT NULL,
  `R_CONTENT` mediumtext NOT NULL,
  `R_BY` int(11) NOT NULL,
  `R_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `R_DATE` date NOT NULL,
  `R_DRAFT` tinyint(1) NOT NULL,
  `R_RATING` int(11) NOT NULL,
  `R_City` varchar(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `R_TITLE`, `R_CONTENT`, `R_BY`, `R_TIME`, `R_DATE`, `R_DRAFT`, `R_RATING`, `R_City`) VALUES
(1, 'fuck', 'test', 0, '2016-11-22 04:17:19', '0000-00-00', 0, 0, '1'),
(2, 'test', 'this', 0, '2016-11-22 04:17:22', '0000-00-00', 0, 0, '1'),
(3, 'test', 'test', 0, '2016-11-17 23:43:20', '0000-00-00', 0, 2, '0'),
(4, 'test', 'testsetset', 0, '2016-11-17 23:49:29', '0000-00-00', 0, 1, '0'),
(5, 'test', 'testsetset', 12, '2016-11-17 23:50:12', '0000-00-00', 0, 1, '0'),
(6, 'Brisbane, the Sunny city', 'I went to Brisbane for a holiday and I was amazed by how great the weather was, until we got smashed by a huge thunder storm.\r\n\r\nNext time I go there, I&#039;m going to make sure I bring a raincoat. Oh and get the insurance on a hire car if you get one, because you&#039;ll need to for the hail damage.', 12, '2016-11-22 05:27:07', '0000-00-00', 0, 4, 'Brisbane'),
(7, 'I ate all the nice food in London', 'I went to London for a holiday and I was amazed by how great the weather was, until we got smashed by a huge thunder storm.\n\nNext time I go there, I&#039;m going to make sure I bring a raincoat. Oh and get the insurance on a hire car if you get one, because you&#039;ll need to for the hail damage.', 12, '2016-11-22 04:52:35', '0000-00-00', 1, 4, 'London'),
(8, 'Brisbane, the Sunny city', 'I went to Brisbane for a holiday and I was amazed by how great the weather was, until we got smashed by a huge thunder storm.\r\n\r\nNext time I go there, I&#039;m going to make sure I bring a raincoat. Oh and get the insurance on a hire car if you get one, because you&#039;ll need to for the hail damage.', 12, '2016-11-22 04:52:41', '0000-00-00', 0, 4, 'Brisbane'),
(9, 'Brisbane, the Sunny city', 'I went to Brisbane for a holiday and I was amazed by how great the weather was, until we got smashed by a huge thunder storm.\r\n\r\nNext time I go there, I&#039;m going to make sure I bring a raincoat. Oh and get the insurance on a hire car if you get one, because you&#039;ll need to for the hail damage.', 12, '2016-11-22 05:27:13', '0000-00-00', 0, 4, 'Brisbane'),
(10, 'Brisbane, the Sunny city', 'I went to Brisbane for a holiday and I was amazed by how great the weather was, until we got smashed by a huge thunder storm.\r\n\r\nNext time I go there, I&#039;m going to make sure I bring a raincoat. Oh and get the insurance on a hire car if you get one, because you&#039;ll need to for the hail damage.', 12, '2016-11-22 05:27:15', '0000-00-00', 0, 4, 'Brisbane'),
(11, 'Brisbane, the Sunny city', 'I went to Brisbane for a holiday and I was amazed by how great the weather was, until we got smashed by a huge thunder storm.\r\n\r\nNext time I go there, I&#039;m going to make sure I bring a raincoat. Oh and get the insurance on a hire car if you get one, because you&#039;ll need to for the hail damage.', 12, '2016-11-22 05:27:19', '0000-00-00', 0, 4, 'Brisbane'),
(12, 'London, the city of Beer and Raves', 'Here''s a generic entry about London. I can''t believe this is a description.', 12, '2016-11-22 04:24:09', '0000-00-00', 1, 4, 'London'),
(13, 'London Has three great places: I didn&#039;t go to any of them.', 'London, the capital of England and the United Kingdom, is a 21st-century city with history stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the iconic â€˜Big Benâ€™ clock tower and Westminster Abbey, site of British monarch coronations. Across the Thames River, the London Eye observation wheel provides panoramic views of the South Bank cultural complex, and the entire city.', 12, '2016-11-22 05:20:20', '0000-00-00', 1, 5, 'London');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(128) NOT NULL,
  `LAST_NAME` varchar(128) NOT NULL,
  `USER_NAME` varchar(128) NOT NULL,
  `EMAIL` varchar(128) NOT NULL,
  `USER_LEVEL` varchar(128) NOT NULL,
  `PASSWORD` varchar(128) NOT NULL,
  `CONFIRMED` varchar(128) NOT NULL,
  `CONFIRMATION_CODE` varchar(128) NOT NULL,
  `LAST_LOGIN_ATTEMPT` varchar(128) NOT NULL,
  `LOGIN_ATTEMPTS` varchar(128) NOT NULL,
  `SIGNUP_DATE` varchar(128) NOT NULL,
  `PHONE_NUMBER` varchar(128) NOT NULL,
  `HOME_CITY` varchar(128) NOT NULL,
  `CONTRIBUTED_REVIEWS` varchar(128) NOT NULL,
  `REVIEW_SCORE_AVERAGE` varchar(128) NOT NULL,
  `REPORTS` varchar(128) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FIRST_NAME`, `LAST_NAME`, `USER_NAME`, `EMAIL`, `USER_LEVEL`, `PASSWORD`, `CONFIRMED`, `CONFIRMATION_CODE`, `LAST_LOGIN_ATTEMPT`, `LOGIN_ATTEMPTS`, `SIGNUP_DATE`, `PHONE_NUMBER`, `HOME_CITY`, `CONTRIBUTED_REVIEWS`, `REVIEW_SCORE_AVERAGE`, `REPORTS`) VALUES
(12, 'matthew', 'neal', 'mattyjneal', '1002915@student.sae.edu.au', '1', '$2y$10$TUVw45bLicjMwEvJwNiosOPT20Tnw8d8BQDy0wAski11QPKaPAPty', '1', '8e4e19651a1530c9e72cfb252b264df0', '', '', 'October 24, 2016, 12:26 pm', '402041355', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
