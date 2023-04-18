

CREATE TABLE `attendance` (
  `uid` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp(),
  `factory_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`uid`, `user_id`, `status`, `datetime`, `factory_id`) VALUES
(60, 8, 'Check Out', '2023-04-18 05:23:04', 1),
(61, 8, 'Check Out', '2023-04-18 05:25:53', 1),
(62, 8, 'Check Out', '2023-04-18 05:28:02', 1),
(63, 10, 'Check Out', '2023-04-18 05:29:16', 1),
(64, 10, 'Check Out', '2023-04-18 08:14:45', 1),
(65, 8, 'Check Out', '2023-04-18 08:32:18', 1),
(66, 10, 'Check Out', '2023-04-18 08:32:26', 1);
