
CREATE TABLE `admin_login` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Umar', 'a@a.com', '123456');



CREATE TABLE `suggestion` (
  `id` int(30) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `user_login` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
   `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `recommendation` (
  `id` int(30) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `bs` varchar(20) NOT NULL,
  `cb` varchar(20) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `js` varchar(20) NOT NULL,
  `db1` varchar(20) NOT NULL,
  `db2` varchar(20) NOT NULL,
  `dsa` varchar(20) NOT NULL,
  `fom` varchar(20) NOT NULL,
  `ts1` varchar(20) NOT NULL,
  `ts2` varchar(20) NOT NULL,
  `hm` varchar(20) NOT NULL,
  `um` varchar(20) NOT NULL,
  `op1` varchar(20) NOT NULL,
  `op2` varchar(20) NOT NULL,
  `mis` varchar(20) NOT NULL,
  `isa` varchar(20) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);


-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);


  ALTER TABLE `recommendation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `diagnose`
--

ALTER TABLE `suggestion`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

  ALTER TABLE `recommendation`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
