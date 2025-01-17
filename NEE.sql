--
-- Creating the table structure for the table `NEE_category`
--

DROP TABLE IF EXISTS `NEE_category`;
CREATE TABLE IF NOT EXISTS `NEE_category` (
  `catID` varchar(6) NOT NULL default '',
  `catDesc` varchar(30) default NULL,
  PRIMARY KEY  (`catID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Insert record data for the table NEE_category`
--

INSERT INTO `NEE_category` (`catID`, `catDesc`) VALUES
('c1', 'Carnival'),
('c2', 'Theatre'),
('c3', 'Comedy'),
('c4', 'Exhibition'),
('c5', 'Festival'),
('c6', 'Family'),
('c7', 'Music'),
('c8', 'Sport'),
('c9', 'Dance');

--
-- Creating the table structure for the table `NEE_events`
--

DROP TABLE IF EXISTS `NEE_events`;
CREATE TABLE IF NOT EXISTS `NEE_events` (
  `eventID` int(10) NOT NULL auto_increment,
  `eventTitle` varchar(256) NOT NULL,
  `eventDescription` varchar(256) default NULL,
  `venueID` varchar(6) default NULL,
  `catID` varchar(6) default NULL,
  `eventStartDate` date default NULL,
  `eventEndDate` date default NULL,
  `eventPrice` decimal(4,2) default NULL,
  PRIMARY KEY  (`eventID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Insert record data for the table `NEE_events`
--

INSERT INTO `NEE_events` (`eventID`, `eventTitle`, `eventDescription`, `venueID`, `catID`, `eventStartDate`, `eventEndDate`, `eventPrice`) VALUES
(1, 'Thomas Bewick and His Apprentices', 'Thomas Bewick is famous for the small-scale wood engravings he and members of his workshop produced, often published as illustrations in books. Less well known are the drawings and paintings also made by these artists.', 'v3', 'c4', '2019-11-30', '2020-10-19', '0.00'),
(2, 'Once in a Lifetime - The Final Tour', 'The Once In A Lifetime - The Final Tour is brought to you by Tony Denton Promotions. This unique arena tour is the very last chance to see your favourite acts together all on one stage.', 'v7', 'c7', '2019-06-24', '2020-06-24', '42.50'),
(3, 'JLS Evolution Tour', 'JLS have announced a reunion UK arena tour returning to the Utilita Arena Newcastle. Since JLS came second on X Factor in 2008, they have been one of the most successful acts in the history of the show.', 'v7', 'c7', '2020-12-12', '2020-12-12', '25.00'),
(4, 'Sara Barker and Ryder Architecture', 'BALTIC presents a site-specific collaborative commission by artist Sara Barker and Ryder Architecture.', 'v2', 'c4', '2020-06-11', '2020-07-11', '0.00'),
(5, 'Punt & Dennis: Life on the Road', 'The delightful duo Punt & Dennis are making a rest-stop here at the Mill Volvo Tyne Theatre as part of their new tour - Life on the Road.', 'v8', 'c3', '2020-02-01', '2020-02-01', '20.00'),
(6, 'A Christmas Carol', 'Visit the three ghosts of Christmas this November as the PLAYHOUSE Whitley Bay kicks off the festive season with a fantastic Disney-esque musical production of A Christmas Carol.', 'v9', 'c6', '2020-11-25', '2020-11-26', '18.50'),
(7, 'The Newcastle Triathlon 2020', 'VO2 Max Racing Events, supported by Triathlon England and Newcastle City Council, are delighted to announce a spectacular new event. The Newcastle Triathlon is a genuinely unique and exciting event held at the vibrant heart of the City, the Quayside.', 'v6', 'c8', '2020-07-19', '2020-07-19', '55.00'),
(8, 'Dirty Dancing', 'One of the most successful shows of all time, the phenomenal West End hit Dirty Dancing is set to make its Newcastle debut with a four-week run at the Theatre Royal next summer.', 'v1', 'c2', '2020-05-06', '2020-05-31', '40.00'),
(9, 'CBeebies Live!', 'CBEEBIES LIVE! THE BIG BAND.\r\nShow starring Mr Tumble, Mister Maker and Mr Bloom.\r\nThe Big Band brings together some of your best loved CBeebies characters in a music - themed spectacle, which is sure to have pre-schoolers rocking in the aisle.', 'v7', 'c6', '2020-04-10', '2020-04-10', '16.00'),
(10, 'Ruth Fettis: Tales from a Forgotten City', 'This exhibition showcases new work by artist Ruth Fettis, taking her previous two dimensional approach and transforming it into 3d dresses made in paper, fabric and metal.', 'v10', 'c4', '2020-07-20', '2020-12-21', '0.00'),
(11, 'Carmen presented by Russian State Ballet and Opera House', 'Performed to a Large Live Orchestra. Carmen is an Opera in four acts by a French composer Georges Bizet, which has become one of the best-known plots with the most memorable music.', 'v8', 'c2', '2020-03-03', '2020-03-03', '35.00'),
(12, 'Winter Festival @ Discovery Museum', 'Celebrate the cold and the snow and join us for a day of winter-themed activities.\r\nFrom Santa Claus to Snegurochka the Snow Madien; celebrate the Festive Season by discovering Christmas traditions from other cultures.', 'v5', 'c6', '2020-12-07', '2020-12-07', '0.00'),
(13, 'Premier League Darts 2020', 'PREMIER LEAGUE DARTS will be bigger than ever with the introduction of an additional league night.', 'v7', 'c8', '2020-05-08', '2020-05-08', '20.00'),
(14, 'Banff Mountain Film Festival', 'Attracting sold out audiences across the globe, the world''s most prestigious mountain film festival returns to Newcastle with a selection of extraordinary short films from the world''s leading adventure film makers.', 'v9', 'c5', '2020-04-25', '2020-04-25', '13.00'),
(15, 'Harlem Globetrotters', 'The world famous Harlem Globetrotters will take fan interaction to a new level when the "Fans Rule" World Tour comes to UK.\r\nOnline voting is now open at harlemglobetrotters.com/rule where all fans can choose which new game-changing rules they want to see.', 'v7', 'c8', '2020-04-09', '2020-04-09', '15.00'),
(16, 'Little Black Rose Musical Variety Show', 'The PLAYHOUSE Whitley Bay is delighted to announce that Little Black Rose Productions will be presenting Little Black Rose Musical Variety Show this December.', 'v9', 'c7', '2020-12-03', '2020-12-03', '15.00'),
(17, 'Ashley Jackson', 'This autumn The Biscuit Factory is honoured to represent an exclusive body of work by one of the UK''s finest watercolour painters, Ashley Jackson.\r\nIt is a pleasure to welcome Ashley back to the North East.', 'v4', 'c4', '2020-10-19', '2020-12-31', '0.00'),
(18, 'Miranda Hart: My What I Call, Live Show', 'Due to public demand for the fabulous Miranda Hart we are thrilled to announce an additional Newcastle performance.\r\nThe award winning Queen of Comedy is on stage doing stand-up for the first time since her hit series ''Miranda'' aired on the BBC.', 'v7', 'c3', '2020-03-19', '2020-03-20', '27.50'),
(19, 'Laurel & Hardy', 'Laurel & Hardy invented the modern comedy double-act and are still as influential today as ever they were. Affectionately regarded by millions, they made over 100 films together and the iconic moments they created still live long in the memory.', 'v9', 'c3', '2020-02-21', '2020-02-21', '16.00'),
(20, 'Peter Pan - Never Ending Story', 'See the boy who never grows up in a live adventure you will never forget. Starring Stacey Solomon (X Factor and winner of I''m a Celebrity Get Me Out of Here).', 'v7', 'c6', '2020-01-15', '2020-01-16', '20.00'),
(21, 'Mamma Mia!','Set on a Greek island paradise, a story of love, friendship and identity is cleverly told through the timeless songs of Abba.', 'v1', 'c7','2020-03-28','2020-04-05','24.00'),
(22, 'Pride and Prejudice', '''It is a truth universally acknowledged, that a single man in possession of a good fortune, must be in want of a wife''. As the Bennet sisters haplessly search for love in Jane Austen''s ultimate romantic comedy, it is Mr Darcy who unwittingly finds his match.', 'v1', 'c2', '2020-02-14', '2020-02-18', '14.50'),
(23, 'Diversity Genesis', 'After six sell out UK tours, 300,000 tickets sold, countless television performances and numerous other accomplishments; Diversity have announced their seventh tour "Genesis".', 'v7', 'c9', '2020-04-23', '2020-04-23', '25.00'),
(24, 'Rhyme Around the World – A Nursery Rhyme Exhibition', 'Rhyme Around the World is a celebration of much-loved ditties and rhymes shared across generations around the world.', 'v11', 'c6', '2019-04-30', '2020-05-14', '0.00'),
(25, 'Permanent Displays at Discovery Museum', 'Discover all about life in Newcastle and Tyneside, from the area''s renowned maritime history and world-changing science and technology right through to fashion through the eras and military history.', 'v5', 'c4', '2020-01-01', '2020-12-31', '0.00'),
(26, 'Elmer and Friends: The Colourful World of David McKee Exhibition at Seven Stories', 'ELMER and Friends: The Colourful World of David McKee to celebrate 30 years of Elmer the Patchwork Elephant.', 'v11', 'c4', '2020-02-09', '2021-02-08', '6.60'),
(27, 'Les Misérables at Theatre Royal Newcastle', 'Cameron Mackintosh''s acclaimed Broadway production of Boublil and Schönberg''s musical Les Misérables will play Newcastle Theatre Royal.', 'v1', 'c2', '2020-08-16', '2020-10-06', '23.50'),
(28, 'Gerry Cinnamon at Newcastle Utilita Arena', 'Gerry Cinnamon will perform live in Newcastle. Tickets for the much anticipated concert at Utilia Arena.', 'v7', 'c7', '2020-11-17', '2020-11-19', '21.95'),
(29, 'The 1985 World Snooker Final', 'The 1985 World Snooker Final', 'v9', 'c8', '2020-09-19', '2020-09-19', '23.15'),
(30, 'Maps Festival: PlayShapes at BALTIC', 'Are you and your kids bored of soft play centres and identikit playgrounds? Looking for something creative where you can do your own thing? Then come and try PlayShapes.', 'v2', 'c6', '2020-07-21', '2020-07-26', '3.50'),
(31, 'KISS End of the Road World Tour at Utilita Arena', 'After an epic and well documented 45-year career that launched an era of rock n roll legends, KISS announced that they will launch their final tour ever.', 'v7', 'c7', '2020-07-14', '2020-07-14', '51.95'),
(32, 'Charge! The Story of England''s Northern Cavalry at Discovery Museum', 'A new gallery which brings the 300 year history of England''s Northern Cavalry regiments to life, through fascinating historic artefacts, and hands-on activities and displays.', 'v5', 'c4', '2020-01-01', '2020-12-31', '0.00'),
(33, 'Rod Stewart Live in Concert at Utilita Arena', 'Rod Stewart is adding more dates to his UK summer tour.', 'v7', 'c7', '2020-07-10', '2020-07-10', '55.95'),
(34, 'Story Time at Seven Stories', 'Explore a world of imagination at Seven Stories with entertaining and enthralling storytelling for the whole family.', 'v11', 'c6', '2020-01-01', '2020-12-31', '0.00'),
(35, 'Mick Peter - To Me, To You', 'Mick Peter lives in Glasgow, Scotland and uses fictional cartoonish imagery to create playful installations.', 'v2', 'c4', '2019-06-21', '2020-10-27', '0.00');

--
-- Creating the table structure for the table `NEE_venue`
--

DROP TABLE IF EXISTS `NEE_venue`;
CREATE TABLE IF NOT EXISTS `NEE_venue` (
  `venueID` varchar(6) NOT NULL default '',
  `venueName` varchar(40) default NULL,
  `location` varchar(30) default NULL,
  PRIMARY KEY (`venueID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Insert record data for the table `NEE_venue`
--

INSERT INTO `NEE_venue` (`venueID`, `venueName`, `location`) VALUES
('v1', 'Theatre Royal', 'Newcastle upon Tyne'),
('v2', 'BALTIC Centre for Contemporary Art', 'Gateshead'),
('v3', 'Laing Art Gallery', 'Newcastle Upon Tyne'),
('v4', 'The Biscuit Factory', 'Newcastle upon Tyne'),
('v5', 'Discovery Museum', 'Newcastle upon Tyne'),
('v6', 'HMS Calliope', 'Gateshead'),
('v7', 'Utilita Arena Newcastle', 'Newcastle upon Tyne'),
('v8', 'Mill Volvo Tyne Theatre', 'Newcastle upon Tyne'),
('v9', 'PLAYHOUSE Whitley Bay', 'Whitley Bay'),
('v10', 'Shipley Art Gallery', 'Gateshead'),
('v11', 'Seven Stories', 'Newcastle upon Tyne');









