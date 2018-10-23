-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 04:37 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Post_id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Tags` text NOT NULL,
  `upvote` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Text` text,
  `Image` text,
  `disable_comment` tinyint(1) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Post_id`, `Title`, `Tags`, `upvote`, `Date`, `Text`, `Image`, `disable_comment`, `User_id`) VALUES
(3, 'My new post', 'Testing, First Post, Diary', 21, '2018-04-19 22:48:51', 'Hello everyone in this website!! (just me tho). I am excited to say that this is my first post on this account. This account just a test tho, don&#39;t know how many people will see this. Maybe a lot of people will see this if this website turns out to be great and actually done (7 days before deadline now :sadface), or maybe no one will see this post, since this website turns out to be garbage and I decided not to let anyone see. Or I just fucking format my laptop. Well I think I&#39;m about ran out of things to say here, I suppose this much of words should be sufficient for testing purposes. And here&#39;s some of Hina wallpaper (3-Gatsu no Lion)\r\n\r\nPeace out ', 'post/787815.jpg', 1, 7),
(4, 'Update on Making This Website', 'Comedy,Diary,Progress', 1, '2018-04-19 23:19:26', 'HOLY SHIET THE FUCKING INDEX DISPLAY WORKS!!!\r\n\r\nI was planning to make the slider on top is the top 4 most popular post and the 4 on the bottom of the slider are the most recent one (or the other way around)\r\n\r\nLooking through again, i looked way more excited for this -_-\r\nWhen I mean it worked, i mean it display on the slider, that&#39;s all.\r\nPretty disappointing yea? Well anyway, this is another post for testing purposes. I mean i need at least 8 of this fucking post to test, so i figured why not make it like a fucking diary instead. This way people will know the making of this fucking web (more like a project instead of web) and i found it stress relieving. Why the fuck not.\r\n\r\nsee ya on the next post\r\n\r\nwhoever u r', 'post/59214087_p0.jpg', 0, 7),
(5, 'It Is Friday My Dudes!', 'Ranting, Testing, Comedy', 1, '2018-04-21 00:02:03', 'Yello to anyone who could spend his/her time doing something useful to the world but instead choosing to read this post. Still on the progress on anything that have to do with the creation of a post. Currently testing the bottom 4 most popular post of one account could have (while having the like/upvote system not working yet). A bit stressful yes, since making a website by no means is an easy task, especially when there are tons of shit going on for an individual. I tell you, I have 6 project deadline in 2 weeks, this week and the next week. It was a fucking disaster. Spent many sleepless days just to get couple project done just to found out OH YOU HAVE MORE TO DO. fml dude.\r\n\r\nWorst thing is that holiday is right in the fucking corner, its like less than a month. Its like you know there gonna be shit ton of treasure you can loot, but you have to fucking kill the lv 99 boss, under leveled, and alone. \r\n\r\nthanks for reading my ranting\r\n\r\nP.S: u should starts doing better shit rather than reading this post ', 'post/vlcsnap-2014-11-22-23h59m00s67.jpg', 0, 7),
(6, 'I Don&#39;t Deserve to Rant', 'Comedy, Ranting, Testing', 1, '2018-04-21 00:15:44', 'Hey its me again! It&#39;s been 5 min, or even an hour, or even a day, or even its been never since the last post, i don&#39;t fucking care. Anyways, in the previous post (rant), i said there is 6 project that is need to be done. I lied to you.What actually happening rn is that i already officially finished 4 out of 6 project already, one the fifth project is actually done,i just havent submit it. So yeah i dont really deserve to rant. Why? coz there r ppl out there who will actually trigered if i being a little bitch. So yeah, beside this website that not even close to 50% eventho its due on 7 days, we''re gucci\r\n\r\njk fck this project i want to watch anime and stupd youtube videos', 'post/1448417849-8251d755f2ca114b778e6ca9685ed1d2.png', 0, 7),
(7, 'I, indeed, am a weeb', 'Anime, Comedy, Testing', 3, '2018-04-21 00:27:06', 'Yes, maybe you already realise it by now. I am indeed a weeb. You may have noticed it already by the previous post images, that all of those are anime related images. No i am not ashamed. I am not ashamed to the fact that i spent 200 full days watching anime (each episode is 24 min, do the math).\r\n\r\nI am a weeb.\r\nAnd I am proud of it.', 'post/CZC_OTWVAAAvsLA.jpg', 0, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Post_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Like` (`upvote`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
