-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-04 19:08:50
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `py`
--

-- --------------------------------------------------------

--
-- 表的结构 `py`
--

CREATE TABLE `py` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `popularity` float NOT NULL,
  `picked` float NOT NULL,
  `win_rate` float NOT NULL,
  `on_fire` float NOT NULL,
  `ed_ratio` float NOT NULL,
  `elimis` float NOT NULL,
  `obj_elims` float NOT NULL,
  `obj_time` float NOT NULL,
  `damage` float NOT NULL,
  `healing` float NOT NULL,
  `blocked` float NOT NULL,
  `deaths` float NOT NULL,
  `ed_ratio_re` float NOT NULL,
  `eliminations` float NOT NULL,
  `solo_kills` float NOT NULL,
  `final_blows` float NOT NULL,
  `medals` float NOT NULL,
  `gold` float NOT NULL,
  `silver` float NOT NULL,
  `bronze` float NOT NULL,
  `cards` float NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `py`
--

INSERT INTO `py` (`id`, `name`, `type`, `popularity`, `picked`, `win_rate`, `on_fire`, `ed_ratio`, `elimis`, `obj_elims`, `obj_time`, `damage`, `healing`, `blocked`, `deaths`, `ed_ratio_re`, `eliminations`, `solo_kills`, `final_blows`, `medals`, `gold`, `silver`, `bronze`, `cards`, `img`) VALUES
(1, 'Mercy', 'Support', 0.074, 0.074, 0.4854, 0.0953, 0.2904, 1.5111, 0.5064, 25.3142, 433.606, 5701.43, 0, 5.2029, 0.2904, 1.5111, 0.1191, 0.4841, 1.3983, 0.9388, 0.2205, 0.2391, 0.5699, './upload/img/1487951784_doc.png'),
(2, 'Genji', 'Offense', 0.0723, 0.0723, 0.5142, 0.0784, 2.1367, 13.8568, 4.1458, 34.0124, 5217.97, 0.641, 0, 6.4852, 2.1367, 13.8568, 2.9515, 7.8889, 2.4176, 0.7946, 0.8255, 0.7975, 0.3363, './upload/img/1487951826_gj.png'),
(3, 'Roadhog', 'Tank', 0.0628, 0.0628, 0.5002, 0.1766, 2.3718, 14.0525, 4.8807, 40.7851, 5939, 2604.53, 0, 5.9248, 2.3718, 14.0525, 2.5006, 8.4174, 3.6403, 1.1682, 1.5043, 0.9678, 0.4113, './upload/img/1487951145_icon-portrait.png'),
(4, 'Lucio', 'Support', 0.0587, 0.0587, 0.5596, 0.1877, 1.561, 9.2359, 4.775, 64.7092, 2418.69, 6196.56, 0, 5.9168, 1.561, 9.2359, 0.3911, 2.0451, 2.5239, 1.4272, 0.6087, 0.4879, 0.5613, './upload/img/1487951307_dj.png'),
(5, 'McCree', 'Offense', 0.06, 0.06, 0.4689, 0.0856, 1.9656, 13.1276, 4.0281, 23.1813, 5257.21, 0, 0, 6.6788, 1.9656, 13.1276, 2.9185, 8.3167, 2.2366, 0.7359, 0.754, 0.7467, 0.2055, './upload/img/1487951300_mc.png'),
(6, 'Reinhardt', 'Tank', 0.0603, 0.0603, 0.524, 0.1189, 1.5439, 10.0578, 3.5186, 59.8392, 4033.02, 0, 11157.3, 6.5143, 1.5439, 10.0578, 1.5328, 6.0876, 2.2297, 0.8152, 0.7171, 0.6974, 0.5002, './upload/img/1487951293_dc.png'),
(7, 'Soldier76', 'Offense', 0.057, 0.057, 0.5137, 0.1297, 2.3689, 15.306, 5.8937, 35.1375, 6587.02, 1094, 0, 6.4611, 2.3689, 15.306, 2.3919, 8.0027, 3.6597, 1.3555, 1.2987, 1.0055, 0.342, './upload/img/1487951282_76.png'),
(8, 'DVA', 'Tank', 0.0528, 0.0528, 0.5358, 0.0813, 3.1559, 14.6267, 5.5818, 61.0486, 5634.36, 0.0199, 3697.73, 4.6348, 3.1559, 14.6267, 1.7921, 5.9799, 2.9682, 1.2725, 0.9583, 0.7373, 0.3671, './upload/img/1487951318_dva.png'),
(9, 'Pharah', 'Offense', 0.0517, 0.0517, 0.4977, 0.0886, 2.0991, 13.718, 4.7364, 24.5467, 6422.65, 0, 0, 6.5352, 2.0991, 13.718, 3.0111, 8.402, 2.4415, 0.9268, 0.8006, 0.7141, 0.3157, './upload/img/1487951325_fj.png'),
(10, 'Hanzo', 'Defense', 0.0527, 0.0527, 0.4742, 0.1013, 2.1045, 12.1837, 3.9106, 17.4428, 5549.62, 0, 0, 5.7893, 2.1045, 12.1837, 3.2149, 8.2448, 2.2365, 0.7915, 0.745, 0.7, 0.1959, './upload/img/1487951332_hz.png'),
(11, 'Ana', 'Support', 0.049, 0.049, 0.4746, 0.0516, 1.2647, 6.6917, 2.4998, 31.3074, 2306.36, 4277.28, 0, 5.2911, 1.2647, 6.6917, 0.4639, 2.282, 1.8939, 0.7646, 0.6635, 0.4658, 0.2643, './upload/img/1487951343_an.png'),
(12, 'Junkrat', 'Defense', 0.0473, 0.0473, 0.5067, 0.0758, 2.0073, 13.056, 4.6846, 22.3105, 6802.91, 0.0809, 0, 6.5043, 2.0073, 13.056, 3.465, 8.6333, 2.4813, 0.9573, 0.8059, 0.7181, 0.2666, './upload/img/1487951350_jr.png'),
(13, 'Widowmaker', 'Defense', 0.0489, 0.0489, 0.4676, 0.0922, 2.3408, 11.6468, 2.8071, 7.4955, 4394.87, 0, 0, 4.9755, 2.3408, 11.6468, 3.5456, 7.6488, 1.7954, 0.5388, 0.6008, 0.6558, 0.1757, './upload/img/1487951362_bw.png'),
(14, 'Zarya', 'Tank', 0.0408, 0.0408, 0.5171, 0.0878, 2.6248, 13.5052, 6.0819, 55.9144, 5195.2, 0, 3226.17, 5.1453, 2.6248, 13.5052, 0.8249, 4.6986, 2.8032, 1.1007, 0.938, 0.7644, 0.473, './upload/img/1487951391_mm.png'),
(15, 'Zenyatta', 'Support', 0.0365, 0.0365, 0.5399, 0.2396, 1.8226, 9.9144, 4.025, 35.4779, 3887.95, 3915.54, 0, 5.4398, 1.8226, 9.9144, 0.9396, 4.0142, 2.6612, 1.0019, 0.922, 0.7374, 0.5598, './upload/img/1487951396_ms.png'),
(16, 'Tracer', 'Offense', 0.0345, 0.0345, 0.4927, 0.0644, 2.1688, 14.9876, 5.3858, 39.6798, 5097.94, 0, 0, 6.9105, 2.1688, 14.9876, 2.7613, 7.4491, 2.5606, 0.9219, 0.8586, 0.78, 0.2373, './upload/img/1487951402_tc.png'),
(17, 'Mei', 'Defense', 0.0321, 0.0321, 0.5233, 0.0721, 2.122, 12.5135, 5.0707, 46.5733, 3616.64, 709.935, 2959.55, 5.897, 2.122, 12.5135, 1.6226, 5.0892, 3.0208, 0.8748, 1.0728, 1.0732, 0.2779, './upload/img/1487951408_mi.png'),
(18, 'Reaper', 'Offense', 0.0298, 0.0298, 0.5152, 0.141, 2.3034, 15.4028, 5.6766, 37.1392, 5619.29, 434.761, 0, 6.687, 2.3034, 15.4028, 3.3653, 9.3896, 3.2594, 1.0464, 1.1006, 1.1123, 0.2935, './upload/img/1487951415_dg.png'),
(19, 'Symmetra', 'Support', 0.0225, 0.0225, 0.626, 0.0619, 2.344, 11.5447, 3.8911, 17.7217, 3477.72, 0, 528.802, 4.9253, 2.344, 11.5447, 1.7373, 5.3775, 2.0388, 0.6132, 0.6974, 0.7282, 0.4865, './upload/img/1487951424_ind.png'),
(20, 'Torbjorn', 'Defense', 0.0215, 0.0215, 0.589, 0.1127, 3.1498, 14.0574, 4.9365, 13.8415, 5808.52, 0, 0, 4.463, 3.1498, 14.0574, 1.94, 5.9962, 2.657, 1.1099, 0.8644, 0.6827, 0.5701, './upload/img/1487951434_tb.png'),
(21, 'Winston', 'Tank', 0.0181, 0.0181, 0.5197, 0.073, 2.0346, 14.6575, 5.2178, 53.316, 4282.59, 0, 5514.93, 7.204, 2.0346, 14.6575, 1.9707, 6.7846, 2.5764, 0.8451, 0.8891, 0.8422, 0.2288, './upload/img/1487951439_pf.png'),
(22, 'Bastion', 'Defense', 0.0113, 0.0113, 0.5162, 0.1246, 2.2214, 13.7534, 5.1184, 16.8409, 7027.73, 591.913, 0, 6.1913, 2.2214, 13.7534, 2.9917, 8.7525, 3.1802, 1.2144, 1.0527, 0.913, 0.3745, './upload/img/1487951447_bt.png'),
(23, 'Sombra', 'Offense', 0.0052, 0.0052, 0.4355, 0.0529, 1.8971, 11.3331, 3.7886, 30.0228, 3874.22, 956.882, 0, 5.9738, 1.8971, 11.3331, 1.4639, 4.9145, 2.5833, 0.5453, 0.9508, 1.0871, 0.2454, './upload/img/1487951452_ha.png');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'tesT123', 1),
(2, '123321', '$2y$10$cVOG90n7k.JSSWfX51v/5OWVzDwuoitbwOJMhLYXrn1wsBNU.Jfpi', 1),
(3, '123333', '$2y$10$wDIjkBKk.GtPZi4Qb5JuxOKyfuaj0uvniFgBqtel9BVJ5jjTK3qkC', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
