-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2020 at 10:04 AM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.1.33-16+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edition`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `label`, `content`, `thumb`, `image_one`, `image_two`, `image_three`, `created_at`, `updated_at`) VALUES
(1, 'Edition Executive Flooring', 'Kitchen', 'With proper maintenance, our hard wood floors will last a lifetime. Our wooden floors are made from natural hardwood or softwoods and the uniqueness of each tree gives them natural character. Our wooden floor installation processes comply with international standards<br><br>\r\nFor flexible design for your interiors, pick one from the range of hard wood and softwood floors we have. Edition Executive Floors installed by our skilled artisans are finished with a scratch resistant coating providing additional superior protection against everyday scratches and scuffs to keep the wooden floor looking new for longer. Our wooden floors are known for their beauty, performance and durability<br><br>\r\nLet your wooden floors natural beauty shine through. We do maintenance of existing wooden floors using premium products and our range of superior wood floor care equipment to help you restore that natural look and feel of your floors and hardwood fittings<br>', '2020-10-2807:57:35imageKitchenCabinetsDesignIdeasForAGreatLookingKitchen-min.jpg', '2020-08-2710:16:34imageflooring.png', '2020-06-2814:13:39imagekitchen.png', '2020-06-2814:08:25imageservice-02.jpg', '2020-06-28 11:08:25', '2020-06-28 11:08:25'),
(2, 'Custom-Tailored Joinery', 'Wardrobes', 'At Edition, we fancy functional elegance and this is what we bring to your interior spaces. Well-crafted bespoke designs ensure comfort, safety and priceless durability<br><br>\r\nWe offer a variety of designs for architraves, balustrades, beadings, cladding, cornices, curtain rods and curtain boxes, hand rails, skirting and steps to ensure you become the artist for your own spaces. Moreover, with proper lead time, bring us your unique artwork and we will put it on wood<br><br>\r\nWood flooring and cladding tell a story of warmth and layering that can be difficult to achieve otherwise. Rooms that make you feel calm and opulent often time incorporate wooden element that sets the vibe. Tell your story today<br><br>', '2020-10-2807:56:00imagekc6.jpg', '2020-08-2710:25:23image222.jpeg', '2020-06-2814:15:22imagewardrobes.png', '2020-06-2814:15:22imageedition-elegant-cabinetry-1024x678.jpg', '2020-06-28 11:15:22', '2020-06-28 11:15:22'),
(3, 'Edition Elegant Cabinetry', 'Flooring', 'Intricately crafted fine cabinetry that are not only beautiful but practical for your daily life. Relying on our years of experience, our cabinet makers will walk you through different board types, colors and designs to help you make the perfect choice for your kitchens and bedrooms. Using modern board processing technology for precision cutting and edge binding, we guarantee international standards for your wardrobes, kitchens and bathrooms<br><br>\r\nWhen you are looking for inspiration, the best place to find it is in nature. With the greatest care and meticulous attention to detail, we work the fine, African hardwoods and soft woods into unique pieces of classic and contemporary furniture that share with you, in every little detail, our love for the wood. All sorts of solid wood accompanied by fine ceramic, refined with innovative functions and manufactured with the highest quality of craftsmanship, cooking will be pure pleasure<br><br>\r\nWhether you are looking for a swing door, sliding door or a walk in wardrobes, visit our showroom and one of our experienced staff will take you through the possibilities for your project. Our execution is sleek, precise and of high quality<br><br>', '2020-10-2807:58:04imagew57233i_main_1_1-min.jpg', '2020-08-2710:16:58imagecabinet.png', '2020-06-2814:16:23imageflooring.png', '2020-06-2814:16:23imageexecutive-flooring.png', '2020-06-28 11:16:23', '2020-06-28 11:16:23'),
(4, 'Edition Exquisite Doors', 'Doors', 'Open the doors to luxury living with our beautifully designed wooden doors built for specific applications. Our doors will bring sophistication to your spaces with their well-executed finishing and bespoke designs. We give our clients the freedom to create their own art; give us your design and we will bring it to life. Our talented artisans enjoy taking on seemingly impossible projects and take pride in creating doors that lock in elegance to your spaces<br><br>\r\nThe combination of Edition’s Wood Doors technical knowhow, state-of the-art equipment and unparalleled commitment to excellence can handle all of your commercial wood door needs. From a basic paint grade door, to a high-profile Mvuli, Teak or African Mahogany door with pivots, an electric security lock and a custom lite layout, Edition can get it done! Plus, our factory finishing technique ensure outstanding consistency-every time on every door<br><br>\r\nFactors that will influence your choice of door are price, functionality and the style of your project. We offer a wide variety of interior doors to suite your needs. We stock some of the most unique veneers alongside the common ones to ensure something for everyone. Choosing the right door will make the world of difference to the overall look of your project and our range of wooden entrance doors, pivot doors, wooden sliding track doors, garage doors, folding/stacking doors and louvered should meet your needs. The perfect door awaits you here!<br><br>', '2020-10-2807:58:20imagerustic-front-door-with-tiny-panes-min.jpg', '2020-10-2808:02:19imagerustic-front-door-with-tiny-panes-min.jpg', '2020-06-2814:17:35imagedoors.png', '2020-06-2814:17:35imageHardwood-door.jpg', '2020-06-28 11:17:35', '2020-06-28 11:17:35'),
(5, 'Fittings', 'Fittings', 'Bespoke fittings unique to each space\r\n<br>\r\nEdition Investments offers the best bespoke approach to designing wood fittings\r\n fit for every unique space. We offer a variety of designs for \r\narchitraves, balustrades, beadings, cladding, cornices, curtain rods and\r\n curtain boxes, hand rails, skirting, including guided steps to ensure \r\nyou become the artist for your own spaces.', '2020-10-2807:58:36imagerockform-glossy-banister-balustrade-min.jpg', '2020-10-2807:58:46imagerockform-glossy-banister-balustrade-min.jpg', '2020-06-2814:18:38imagefitings.png', '2020-06-2814:18:38imagebespoke-fitting.jpg', '2020-06-28 11:18:38', '2020-06-28 11:18:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
