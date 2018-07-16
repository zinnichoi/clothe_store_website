-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2017 lúc 10:51 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_fashion`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_post`
--

CREATE TABLE `db_post` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(256) NOT NULL,
  `post_desc` text NOT NULL,
  `post_thumb` varchar(256) NOT NULL,
  `post_detail` text NOT NULL,
  `time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_post`
--

INSERT INTO `db_post` (`post_id`, `post_title`, `post_desc`, `post_thumb`, `post_detail`, `time`) VALUES
(24, 'These Brand New Wedding Gowns Are Insanely Breathtaking', 'Whether you’re a bride-to-be or simply love gawking at dreamy wedding dresses like us, Bridal Week is the perfect excuse to peruse fantastical creations by top designers. Whether it’s Marchesa’s romantic fairytale-style sleeves, Sachin & Babi’s modern lace and jacquard dress over trousers or Lela Rose’s minimal long-sleeve, pearl-adorned gown, here, witness the best from the fall 2018 collections. Extraordinary beauty abounds. ', 'Rachel-Bilson-2.jpg', '<p>Whether you’re a bride-to-be or simply love gawking at dreamy wedding dresses like us, Bridal Week is the perfect excuse to peruse fantastical creations by top designers. Whether it’s Marchesa’s romantic fairytale-style sleeves,&nbsp;Sachin &amp; Babi’s modern lace and jacquard dress over trousers or Lela Rose’s minimal long-sleeve, pearl-adorned gown, here, witness the best from the&nbsp;fall 2018 collections. Extraordinary beauty abounds.</p', '2017-10-13'),
(25, 'Rachel Bilson’s Post-Breakup Pad Is Perfect For A Fresh Start', 'Chances are, you’ve wondered what it’s like to live like the stars. From sprawling mansions to luxurious brownstones, celebs like Selena Gomez and Angelina Jolie without a doubt own some of the most coveted properties in the country. And because they’re constantly on the move to accommodate hectic career paths, it’s no surprise they’re making major real-estate jumps that go beyond those average one-bedroom apartments. Here, the homes that will from now on be known as humble abodes to Hollywood’s finest.', 'news2.jpg', '<p>Following her recent split from longtime boyfriend Hayden Christensen, the former OC star dropped $3.25 million on a chic Pasadena mansion, complete with six bedrooms and four bathrooms. The mid-century property measures nearly 36,000 square feet, and the single-story home known as \"Ralph\'s House\" features floor-to-ceiling windows, a resort-style backyard and rolling gardens with unbelievable mountain views. Here\'s to her fresh start.</p>', '2017-11-14'),
(27, 'Chanel Just Confirmed These 4 Trends Are About To Be Everywhere', 'Always an astounding finish to fashion month, Chanel transported show-goers to the South-East of France for Paris Fashion Week‘s finale, transforming the Grand Palais into a lavish waterfall setting inspired by the Gorges du Verdon canyon.\r\n\r\n', 'news3.jpg', '<p>Delivering grandiose glamour from the clothing to the accessories, luxuriant serenity transpired throughout the collection, predominantly done in a palette of turquoise, seafoam and azure with a frothy white finish. What’s more, the runway solidified for us four trends we’ve witnessed throughout New York, London and Milan—all unexpected hits we’re now confident will be huge for spring.</p>', '2017-12-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_aboutus`
--

CREATE TABLE `tbl_aboutus` (
  `id` int(10) NOT NULL,
  `introduction` varchar(1000) NOT NULL,
  `name` varchar(500) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `more_infor` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`id`, `introduction`, `name`, `contact`, `address`, `more_infor`) VALUES
(0, '    \"It’s an extremely cheap shop that basically caters to all your needs. Ranging from clothing to beauty to school to knick-knacks, \r\nthis website has everything, AND it’s incredibly cheap! If you actually read the reviews on everything you’re buying,\r\n it’s really rare that you’d be ripped off. I wear my YesStyle clothes literally all the time, and I ALWAYS get compliments from friends and even strangers!\" \r\nPricing: Dresses start at $3.95.', 'Lala Store', 'Advertising purchases - please contact for immnediate release or message to arising: 0941.146.465', ' 264 Nguyen Trai street, Thanh Xuan district, Ha Noi city', 'What they carry: Women\'s straight, plus, and maternity sizes, shoes and accessories, plus men\'s, children\'s, and babies\' sizes.Shipping: Free on all orders of $35+.  Ranging from clothing to beauty to school to knick-knacks, this website has everything, AND it’s incredibly cheap! If you actually read the reviews on everything you’re buying, it’s really rare that you’d be ripped off. I wear my YesStyle clothes literally all the time, and I ALWAYS get compliments from friends and even strangers.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `about` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `name`, `mail`, `address`, `thumb`, `about`, `time`) VALUES
(2, 'zinnichoi', 'manhtien', 'Nguyen Manh Tien', 'nguyenmanhtienhanu@gmail.com', 'Ha Nam', 'admin_v01D_support.png', 'I like play video game', '2017-12-11'),
(3, 'admin', 'admin', 'Nguyen Dang Sang', 'dangsang@gmail.com', 'Ha noi', 'admin_v01D_support.png', 'I like hacking', '2017-12-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(10) NOT NULL,
  `contend` varchar(256) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `message` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `phoneNumber`, `message`) VALUES
(1, 'Nguyen Manh Hung', 'nguyenmanhhung@gmail.com', 'Xin làm đối tác', '0975039671', 'Dear LaLa store,\r\nTôi là Nguyễn Mạnh Hùng, hiện đang quản lý nhà máy sản xuất quần áo thể thao. Tôi muốn hợp tác với shop để kinh doanh san phẩm này. Liên lạc lại với chúng tôi qua email.'),
(2, 'a', 'a', 'a', 'a', 'a'),
(3, 'a', 'a', 'a', 'a', 'a'),
(4, 'nguyen manh tien', 'tienhanu@gmail.com', 'tiennm', '0975039671', 'manhtien'),
(5, 'a', 'aa', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `age` int(2) NOT NULL,
  `phoneNumber` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `username`, `password`, `name`, `age`, `phoneNumber`, `email`, `address`, `thumb`) VALUES
(6, 'zinnichoi', '2a26569e98b26668f39e98e6baef2d54', 'nguyen manh tien', 21, '0975039672', 'nguyenmanhtienhanu@gmail.com', 'Ha Nam', 't4.jpg'),
(7, 'tien', 'cdb80b88b1ac5553bac62c030a56e840', 'Nguyễn Mạnh Tiến', 23, '0975685423', 'hanu@gmail.com', 'Hà Nội', 'marc.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `age` int(10) NOT NULL,
  `phoneNumber` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `salary` int(20) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `age`, `phoneNumber`, `address`, `salary`, `time`) VALUES
(4, 'Ngô Quang Lộc', 18, '0975039671', 'ha nam', 3100000, '2017-12-11'),
(5, 'Nguyễn Tuấn Anh', 19, '0943682588', 'Hà Nội', 1500000, '2017-12-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `user_address` varchar(250) COLLATE utf8_bin NOT NULL,
  `total` int(12) NOT NULL,
  `Detail` text COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `status`, `user_id`, `user_name`, `user_email`, `user_phone`, `user_address`, `total`, `Detail`, `date`) VALUES
(60, 1, 0, 'nguyen hai hung', 'hung@gmail.com', '0975039671', 'ngach 32/84 đỗ đức dục Nam từ liêm Hà Nội', 386000, '', '2017-12-12'),
(59, 0, 0, 'nguyen phu thuc', 'tien@gmail.com', '0975039671', 'Xóm 5 hạ vĩ nhân chính lý nhân', 156000, '', '2017-12-12'),
(66, 0, 6, 'tien', 'nguyenmanhtienhanu@gmail.com', '0975039671', 'ha nam', 250000, '', '2017-12-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_title` varchar(256) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_detail` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_thumb` varchar(256) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cat_id` int(2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_title`, `product_price`, `product_desc`, `product_detail`, `product_thumb`, `cat_id`, `time`) VALUES
(1, 'Blueprint Couture', 3000000, 'IMPORTANT:\r\n- Barter or refund will not apply to printed products unless the goods are defective.\r\n- Special characters such as diacritic, ç or ñ can not be printed.\r\n- Printed products will take 3-5 more days to ship.\r\n- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.\r\n- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.\r\nComment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Blazer : Slim fit, Stretchy, Single breasted, Notched lapel, 1 Chest pocket, 2 Outside pocket, 2 Inside pocket, 2 Button, Long sleeve, Double vented on the back  \r\n\r\nPants : Slim straight fit, Stretchy, 1 Hook button, Zipper closure, 2 Front pocket, 2 Back pocket', 't-shs488-black-1_1024x1024@2x.jpg', 1, '2017-07-20 10:46:53'),
(25, 'Washed Denim Shirt', 350000, 'IMPORTANT:- Barter or refund will not apply to printed products unless the goods are defective.- Special characters such as diacritic, ç or ñ can not be printed.- Printed products will take 3-5 more days to ship.- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'It\'s the only of its kind and its plush comfy and beyond stylish. Enjoy this modern fit, 6 Button, Long sleeve, 1 Front pocket, Stretchy button up and look great as well as feel great.76% Cotton, 22% Polyester, 2% Spandex/ Machine washable (Separate/Cold water/Hand wash recommendedColor disclaimer: Due to monitor settings and monitor pixel definition, we cannot guarantee the color that you see will be exact from the actual color of the product', 't-nkths605-black-1_1024x1024@2x.jpg', 1, '2017-12-12 05:33:55'),
(26, 'Jeans', 200000, 'IMPORTANT:- Barter or refund will not apply to printed products unless the goods are defective.- Special characters such as diacritic, ç or ñ can not be printed.- Printed products will take 3-5 more days to ship.- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Enjoy and move freely in these straight fit, 2 front pocket, 2 back pocket, stretchy97% Cotton, 3% Polyurethane / Machine washable (Hand wash or Dry clean recommendedColor disclaimer: Due to monitor settings and monitor pixel definition, we cannot guarantee the color that you see will be exact from the actual color of the product.', 't-kej1675-blue-1_1024x1024@2x.jpg', 1, '2017-12-12 05:34:34'),
(27, 'PRADA ', 1000000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'The oversized proportions of Prada\'s navy wool-blend coat makes it ideal as an outershell to cold-weather layers. It\'s tailored in Italy with peak lapels and long sleeves that fall from dropped shoulder seams to create a curved silhouette, and constructed with a double-breasted button-fastening and exaggerated patch pockets. Shrug it over statement separates on chilly mornings.\r\nShown here with Marni Trunk medium leather shoulder bag, The Row Nolita cashmere\r\n', '1185539_1_large.jpg', 1, '2017-07-20 10:54:00'),
(28, 'Larsson & Jennings', 245000, 'IMPORTANT:\r\n- Barter or refund will not apply to printed products unless the goods are defective.\r\n- Special characters such as diacritic, ç or ñ can not be printed.\r\n- Printed products will take 3-5 more days to ship.\r\n- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.\r\n- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.\r\nComment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Often an after-thought accessory, a good watch can be a complete game-changer. Larsson & Jennings has been helping guys stylishly tell the time since the company’s inception in 2012. The Swiss watchmaker offers classical designs with a modern twist – its current collection includes wristwear made from hand-finished metals with straps made from locally sourced leather. And, as an added bonus, every design is sealed with crystal sapphire glass for a refined, long-lasting finish.', 'asos-mw-dd-article-new-in-01.jpg', 1, '2017-07-20 10:55:15'),
(29, 'ASOS | Star Wars', 230000, 'IMPORTANT:\r\n- Barter or refund will not apply to printed products unless the goods are defective.\r\n- Special characters such as diacritic, ç or ñ can not be printed.\r\n- Printed products will take 3-5 more days to ship.\r\n- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.\r\n- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.\r\nComment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'IMPORTANT:\r\n- Barter or refund will not apply to printed products unless the goods are defective.\r\n- Special characters such as diacritic, ç or ñ can not be printed.\r\n- Printed products will take 3-5 more days to ship.\r\n- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.\r\n- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.\r\nComment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'asos-mw-dd-article-new-in-02.jpg', 1, '2017-07-20 10:56:19'),
(30, 'Naval gazing', 500000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'The classic double-breasted peacoat has been on the menswear back-burner for the past few winters, but your man here shows how to revive this seafaring-chic stalwart for AW17. Specifically, by adding in a chunky knit roll-neck, straight-leg jeans and a pair of Clarks Wallabees – like a cross between Robert Redford in 70s thriller Three Days of the Condor, and a mid-90s Wu-Tang Clan affiliate. ', 'asos-mw-dd-article-stylish-guys-cold-weather-04.jpg', 1, '2017-07-20 10:57:33'),
(31, 'Rodini', 600000, 'IMPORTANT:\r\n- Barter or refund will not apply to printed products unless the goods are defective.\r\n- Special characters such as diacritic, ç or ñ can not be printed.\r\n- Printed products will take 3-5 more days to ship.\r\n- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.\r\n- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.\r\nComment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'The fifth and final collaboration between the brands brings a line consisting of one tracksuit, one t-shirt, one hoodie set, one padded vest and one beanie in addition to an Equipment sneaker on the footwear side.\r\n\r\nThe prints were developed by the founder and creative director of Mini Rodini, Cassandra Rhodin, who claims that this is her favorite collection so far.\r\n\r\nThe sustainability factor in the collaboration is important for both Mini Rodini and adidas Originals. Therefore, all apparel is made out of 100 % organic cotton and recycled polyester. The footwear is made out of partly recycled materials.', 'mini-rodini-adidas.jpg', 1, '2017-07-20 10:58:32'),
(32, 'Hooded Zipper Coat', 125000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Stay warm and display this stylish modern regular fit, 2 hand pocket, long sleeve, zipper closure, hooded coat.65% Wool, 35% Polyester, 5% Span/ Dry clean recommended.Color disclaimer: Due to monitor settings and monitor pixel definition, we cannot guarantee the color that you see will be exact from the actual color of the product', 't-ndc20-beige-1_1024x1024@2x.jpg', 2, '2017-12-12 05:33:22'),
(33, 'OSCAR DE LA RENTA ', 430000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Exotic foliage and tropical fauna are among the themes explored in Oscar de la Renta\'s Resort 2018 collection, as is exemplified by this ivory and green silk and cotton-blend dress. Made in Italy, it\'s shaped with a scoop-neck and a coordinating buckled belt to create a feminine silhouette, and then falls from a dropped waist to a boxy hem over ivory stretch silk-crepe lining. Balance the dramatic proportions with velvet stilettos.\r\nShown here with Saint Laurent Amber velvet sandals, Valentino Long floral-drop earringsand Bottega Veneta Knot crystal-embellished clutch.\r\n\r\n', '1186980_1.jpg', 2, '2017-07-20 12:39:58'),
(34, 'ROCHAS ', 250000, 'IMPORTANT:\r\n- Barter or refund will not apply to printed products unless the goods are defective.\r\n- Special characters such as diacritic, ç or ñ can not be printed.\r\n- Printed products will take 3-5 more days to ship.\r\n- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.\r\n- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.\r\nComment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'This Rochas loose-knit cardigan offers a slouchy silhouette with dropped shoulders and a hem that rises at the centre when buttoned. It\'s crafted in Italy from black, white, beige, and cornflower-blue heavyweight cotton, with a V-neckline accented with black grosgrain ties which can be left to hang or tied in a bow. Team it with cropped trousers and kitten heels to complete a contemporary smart-casual look.\r\nShown here with Rochas Point-toe Mary-Jane satin pumps, Fendi V-neck draped silk\r\n', '1189568_1.jpg', 2, '2017-07-20 12:41:24'),
(35, 'VALENTINO ', 150000, 'IMPORTANT:\r\n- Barter or refund will not apply to printed products unless the goods are defective.\r\n- Special characters such as diacritic, ç or ñ can not be printed.\r\n- Printed products will take 3-5 more days to ship.\r\n- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.\r\n- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.\r\nComment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Valentino’s bottle-green hammered satin dress epitomises the house\'s sport-luxe vision for Resort 2018. It\'s crafted with couture-esque attention to detail and features a subtle racer-back shape, elasticated drawstring waist, and white topstitching which outlines the swishy pleated panels. Elevate the flared hem on gold stilettos for a refined appearance with contemporary freshness.\r\nShown here with Saint Laurent Amber metallic-leather sandals and Prada Cahier velvet clutch.\r\n', '1181051_1.jpg', 2, '2017-07-20 12:42:15'),
(36, 'Hooded poncho', 150000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Knitted checked poncho, pockets, fur hood, short sleeves, zip closure. The model measures 174cm, one size corresponds to 38-40\r\n\r\nCollection :  Fall/Winter 2017\r\nComposition : 45%Viscose, 28%Nylon, 15%Polypropylene, 12%Other\r\nVendor Name : J&H FASHION\r\n', 'jh-fashion-poncho-a-capuche-navy-1.jpg', 2, '2017-07-20 12:43:08'),
(37, 'Cotton parka with fur inner', 1000000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Parka with hood decorated with removable fur, embroideries and pearls, pockets, drawstring. The model measures 177cm and wears M\r\n\r\nCollection :  Fall/Winter 2017\r\nComposition : 100%Cotton\r\nVendor Name : COLYNN\r\n', 'colynn-parka-en-coton-fourree13-navy-2.jpg', 2, '2017-07-20 12:43:53'),
(38, 'Camo shirt in cotton', 250000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Patterned shirt, military print, pockets, casual fit. The model measures 172cm and wears S/M\r\n\r\nCollection :  Fall/Winter 2017\r\nComposition : 100%Cotton\r\nVendor Name : AZAKA\r\n', 'azaka-chemise-militaire-avec-patch-kaki-1.jpg', 2, '2017-07-20 12:45:09'),
(39, 'Tamsin Off The Shoulder Skater Dress', 350000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Dresses are the most-wanted wardrobe item for day-to-night dressing.\r\nFrom cool-tone whites to block brights, we\'ve got the everyday skater dresses and party-ready bodycon styles that are perfect for transitioning from day to play. Minis, midis and maxis are our motto, with classic jersey always genius and printed cami dresses the season\'s killer cut - add skyscraper heels for a serioulsy statement look. Dress up or down in style with boohoo.\r\n', 'azz51307_black_xl.jpg', 2, '2017-07-20 12:48:54'),
(40, ' TOP BLACK', 400000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Your little one will be the trendiest tot in town with this Hooded Top by adidas. Featuring the adidas signature logo, short sleeves and a hood, you can pair this with sweatpants, shorts or jeans. And if you really want to dress your baby up, add little sneakers to finish off the look. Talk about baby swag!Apparel Type :	TopsColour :	BlackComposition :	CottonSKU :	AD439AA61YGWZAFAS', '209738-7756-837902-2-detail.jpg', 11, '2017-12-12 05:35:23'),
(41, 'POP PINK', 157000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Sun is out, dresses on! Style your little girl in this Stain Resistant Emily Dress by Parental Instinct. The cute pink frock features short sleeves, a collar, a front pocket detail and ruffled edge. And the best part? This super cute dress is stain-resistant. What more could you ask for mom?Apparel Type :	DressesColour :	PinkComposition :	CottonSKU :	PA058AA81WTQZAFAS', 'medium.jpg', 11, '2017-12-12 05:35:33'),
(42, 'TEE WHITE', 150000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Taking your little one to the beach? We\'ve got the cutest items that are perfect for on-the-go. We especially love this Parental Instinct Stain Resistant Musical Bear Tee. Not only does the stain-resistant feature make your life easier but the cute bear design will definitely be a winner with your little one. Apparel Type :	TeesColour :	WhiteComposition :	CottonSKU :	PA058AA75WTWZAFAS', '208724-0842-427802-2-catalog1.jpg', 11, '2017-12-12 05:35:47'),
(43, 'Collar Sweater', 156000, 'IMPORTANT:- Barter or refund will not apply to printed products unless the goods are defective.- Special characters such as diacritic, ç or ñ can not be printed.- Printed products will take 3-5 more days to ship.- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Jacquard-knit sweater in soft cotton fabric. Rib-knit shawl collar with button, long sleeves, and ribbing at cuffs and hem.100% cotton. Machine wash warmImportedArt.No. 89-1451', 'hmprod.jpg', 11, '2017-12-12 05:36:02'),
(44, 'Sweatshirt and Pants', 157000, 'IMPORTANT:\r\n- Barter or refund will not apply to printed products unless the goods are defective.\r\n- Special characters such as diacritic, ç or ñ can not be printed.\r\n- Printed products will take 3-5 more days to ship.\r\n- We are not responsible in case a player leaves the team, changes the shirt number, and / or changes the badge.\r\n- If the print length is larger than the standard size as the guide, we will adjust the same font but with a smaller size without notice.\r\nComment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Set with a sweatshirt and pants in soft fabric with a printed design. Sweatshirt with ribbing at neckline, cuffs, and hem. Sweatpants with elasticized drawstring waistband and ribbed hems. Soft, brushed inside.\r\n80% cotton, 20% polyester. Machine wash warm\r\nImported\r\nArt.No. 59-9896', 'kids.jpg', 11, '2017-07-20 13:00:04'),
(45, 'Cotton Sweater', 249000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Knit sweater in cotton fabric with ribbing at neckline, cuffs, and hem.100% cotton. Machine wash warmImportedArt.No. 38-2897', 'sweater1.jpg', 11, '2017-12-12 05:32:11'),
(46, 'LANVIN', 265000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Just right for relaxing in, this grey tracksuit by luxury French designer Lanvin is made in soft, stretchy and comfortable cotton jersey with a fleecy inside. It has a semi-exposed navy blue zip fastener down the front of the top, with an embroidered logo on the chest, pouch pockets and unfinished edges on the cuffs and hem. The trousers have zip detailing on the ankles and a drawstring waist for a good fit. \r\nProduct number 183693\r\n100% soft & stretchy cotton jersey\r\nMachine wash (30*C)\r\nZip fastener on top\r\nDrawstring waist on trousers\r\nNot available for shipping to: United States', 'lanvin-boys-grey-tracksuit.jpg', 11, '2017-07-20 13:02:08'),
(47, 'SPOILED ME', 275000, 'Comment: The shipping cost depends on the country of the place and the weight / package. The customer will see the shipping costs online, before order confirmation.', 'Girls can party in style in this tiered tulle dress by Spoiled Me. In a beautiful blue, it has a large, fun heart appliqué on the bodice and feels so grown up that anyone wearing it is sure to be well-behaved all night long.\r\nModel: Height 140 (average 10 year)\r\nSize of dress worn in the photo: 10 year\r\nProduct number 186694\r\n100% softly textured nylon\r\nLining: 72% viscose satin, 28% polyester (soft & smooth)\r\nHand wash with care / do not soak\r\nZip fastener\r\nLength: above the knee\r\nComes in a mesh bag', 'spoiled-me-girls-blue-tulle-dress.jpg', 11, '2017-07-20 13:03:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product-review`
--

CREATE TABLE `tbl_product-review` (
  `id` int(10) NOT NULL,
  `rate` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productId` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customerid` int(10) NOT NULL,
  `commentid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_cat`
--

CREATE TABLE `tbl_product_cat` (
  `cat_id` int(2) UNSIGNED NOT NULL,
  `cat_title` varchar(128) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product_cat`
--

INSERT INTO `tbl_product_cat` (`cat_id`, `cat_title`) VALUES
(1, 'Male'),
(2, 'Female'),
(11, 'Kid');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(10) NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `type`) VALUES
(0, 'PENDING'),
(1, 'APPROVE'),
(2, 'REJECT');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_post`
--
ALTER TABLE `db_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_product-review`
--
ALTER TABLE `tbl_product-review`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_post`
--
ALTER TABLE `db_post`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT cho bảng `tbl_product-review`
--
ALTER TABLE `tbl_product-review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  MODIFY `cat_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
