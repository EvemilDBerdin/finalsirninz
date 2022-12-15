-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 07:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `e_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_started` datetime NOT NULL,
  `date_submitted` datetime NOT NULL,
  `duration` varchar(70) NOT NULL,
  `all_questions` int(11) NOT NULL,
  `all_correct_answer` text NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `is_passed` int(11) NOT NULL COMMENT '0-fail, 1-passed',
  `exam_status` int(1) NOT NULL COMMENT '0 - enabled, 1-disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`e_id`, `user_id`, `date_started`, `date_submitted`, `duration`, `all_questions`, `all_correct_answer`, `exam_type`, `is_passed`, `exam_status`) VALUES
(6104, 96, '2022-12-15 00:00:00', '2022-12-15 00:00:00', '', 10, '1', 'Sample A', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam_details`
--

CREATE TABLE `exam_details` (
  `ed_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `questionaire_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_answer` text NOT NULL,
  `edetails_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_details`
--

INSERT INTO `exam_details` (`ed_id`, `exam_id`, `questionaire_id`, `user_id`, `user_answer`, `edetails_status`) VALUES
(1356, 6084, 6, 76, 'Specification freeze', 0),
(1357, 6084, 7, 76, 'Relative Application Development', 0),
(1358, 6084, 8, 76, 'Vertical Prototype', 0),
(1359, 6084, 9, 76, 'It increases the component reusability.', 0),
(1360, 6084, 10, 76, '\r\nAll of the above', 0),
(1361, 6084, 1, 76, 'Merging', 0),
(1362, 6084, 2, 76, 'Of performing corrections.', 0),
(1363, 6084, 3, 76, 'Peter', 0),
(1364, 6084, 4, 76, 'System Testing', 0),
(1365, 6084, 5, 76, 'System Planning', 0),
(1366, 6084, 6, 76, 'Specification freeze', 0),
(1367, 6084, 7, 76, 'Rapid Application Development', 0),
(1368, 6084, 8, 76, 'Horizontal Prototype', 0),
(1369, 6084, 9, 76, 'Both (a) & (c)', 0),
(1370, 6084, 10, 76, 'WINWIN Spiral Model', 0),
(1371, 6084, 1, 76, 'Merging', 0),
(1372, 6084, 2, 76, 'Neil Armstrong', 0),
(1373, 6084, 3, 76, 'Field', 0),
(1374, 6084, 4, 76, 'System Testing', 0),
(1375, 6084, 5, 76, 'Feasibility Study', 0),
(1376, 6084, 6, 76, 'Specification freeze', 0),
(1377, 6084, 7, 76, 'Rapid Application Development', 0),
(1378, 6084, 8, 76, 'Diagonal Prototype', 0),
(1379, 6084, 9, 76, 'It necessitates customer feedbacks.', 0),
(1380, 6084, 10, 76, 'Concurrent Development Model', 0),
(1381, 6084, 1, 76, 'Ada Lovelace', 0),
(1382, 6084, 2, 76, 'Neil Armstrong', 0),
(1383, 6084, 3, 76, 'Data', 0),
(1384, 6084, 4, 76, 'System Testing', 0),
(1385, 6084, 5, 76, 'System Planning', 0),
(1386, 6084, 6, 76, 'Specification freeze', 0),
(1387, 6084, 7, 76, 'Relative Application Development', 0),
(1388, 6084, 8, 76, 'Domain Prototype', 0),
(1389, 6084, 9, 76, 'It requires highly skilled developers/designers.', 0),
(1390, 6084, 10, 76, 'WINWIN Spiral Model', 0),
(1391, 6084, 1, 76, 'Copying', 0),
(1392, 6084, 2, 76, 'Of joining data from two or more tables.', 0),
(1393, 6084, 3, 76, 'Peter', 0),
(1394, 6084, 4, 76, 'System Design', 0),
(1395, 6084, 5, 76, 'System Planning', 0),
(1396, 6084, 6, 76, 'Parallel run', 0),
(1397, 6084, 7, 76, 'Rapid Application Document', 0),
(1398, 6084, 8, 76, 'Horizontal Prototype', 0),
(1399, 6084, 9, 76, 'It necessitates customer feedbacks.', 0),
(1400, 6084, 10, 76, 'Incremental Model', 0),
(1401, 6084, 1, 76, 'Data manipulation', 0),
(1402, 6084, 2, 76, 'Of performing corrections.', 0),
(1403, 6084, 3, 76, 'Field', 0),
(1404, 6084, 4, 76, 'Preliminary Investigation and Analysis', 0),
(1405, 6084, 5, 76, 'System Analysis', 0),
(1406, 6084, 6, 76, 'All of the above', 0),
(1407, 6084, 7, 76, 'None of the above', 0),
(1408, 6084, 8, 76, 'Horizontal Prototype', 0),
(1409, 6084, 9, 76, 'It increases the component reusability.', 0),
(1410, 6084, 10, 76, '\r\nAll of the above', 0),
(1411, 6084, 1, 76, 'Data manipulation', 0),
(1412, 6084, 2, 76, 'Of joining data from two or more tables.', 0),
(1413, 6084, 3, 76, 'Peter', 0),
(1414, 6084, 4, 76, 'System Design', 0),
(1415, 6084, 5, 76, 'System Analysis', 0),
(1416, 6084, 6, 76, 'All of the above', 0),
(1417, 6084, 7, 76, 'None of the above', 0),
(1418, 6084, 8, 76, 'Diagonal Prototype', 0),
(1419, 6084, 9, 76, 'Both (a) & (c)', 0),
(1420, 6084, 10, 76, 'Incremental Model', 0),
(1421, 6084, 1, 76, 'Merging', 0),
(1422, 6084, 2, 76, 'Of arranging the data in a table.', 0),
(1423, 6084, 3, 76, 'Peter', 0),
(1424, 6084, 4, 76, 'System Testing', 0),
(1425, 6084, 5, 76, 'Details of DFD', 0),
(1426, 6084, 6, 76, 'Sizing', 0),
(1427, 6084, 7, 76, 'Relative Application Development', 0),
(1428, 6084, 8, 76, 'Vertical Prototype', 0),
(1429, 6084, 9, 76, 'It requires highly skilled developers/designers.', 0),
(1430, 6084, 10, 76, '\r\nAll of the above', 0),
(1431, 6084, 1, 76, 'Data manipulation', 0),
(1432, 6084, 2, 76, 'Of performing corrections.', 0),
(1433, 6084, 3, 76, 'Name', 0),
(1434, 6084, 4, 76, 'System Design', 0),
(1435, 6084, 5, 76, 'Details of DFD', 0),
(1436, 6084, 6, 76, 'Parallel run', 0),
(1437, 6084, 7, 76, 'None of the above', 0),
(1438, 6084, 8, 76, 'Vertical Prototype', 0),
(1439, 6084, 9, 76, 'It requires highly skilled developers/designers.', 0),
(1440, 6084, 10, 76, '\r\nAll of the above', 0),
(1441, 6085, 1, 70, 'Ada Lovelace', 0),
(1442, 6085, 2, 70, 'Neil Armstrong', 0),
(1443, 6085, 3, 70, 'Name', 0),
(1444, 6085, 4, 70, 'System Testing', 0),
(1445, 6085, 5, 70, 'Details of DFD', 0),
(1446, 6085, 6, 70, 'Parallel run', 0),
(1447, 6085, 7, 70, 'None of the above', 0),
(1448, 6085, 8, 70, 'Domain Prototype', 0),
(1449, 6085, 9, 70, 'It necessitates customer feedbacks.', 0),
(1450, 6085, 10, 70, 'WINWIN Spiral Model', 0),
(1451, 6085, 1, 70, 'Ada Lovelace', 0),
(1452, 6085, 2, 70, 'Neil Armstrong', 0),
(1453, 6085, 3, 70, 'Name', 0),
(1454, 6085, 4, 70, 'System Testing', 0),
(1455, 6085, 5, 70, 'Details of DFD', 0),
(1456, 6085, 6, 70, 'Parallel run', 0),
(1457, 6085, 7, 70, 'None of the above', 0),
(1458, 6085, 8, 70, 'Domain Prototype', 0),
(1459, 6085, 9, 70, 'It necessitates customer feedbacks.', 0),
(1460, 6085, 10, 70, 'WINWIN Spiral Model', 0),
(1461, 6085, 1, 70, 'Ada Lovelace', 0),
(1462, 6085, 2, 70, 'Of arranging the data in a table.', 0),
(1463, 6085, 3, 70, 'Field', 0),
(1464, 6085, 4, 70, 'Coding', 0),
(1465, 6085, 5, 70, 'Details of DFD', 0),
(1466, 6085, 6, 70, 'All of the above', 0),
(1467, 6085, 7, 70, 'Rapid Application Document', 0),
(1468, 6085, 8, 70, 'Vertical Prototype', 0),
(1469, 6085, 9, 70, 'It necessitates customer feedbacks.', 0),
(1470, 6085, 10, 70, 'WINWIN Spiral Model', 0),
(1471, 6084, 1, 76, 'Data manipulation', 0),
(1472, 6084, 2, 76, 'Of joining data from two or more tables.', 0),
(1473, 6084, 3, 76, 'Peter', 0),
(1474, 6084, 4, 76, 'System Design', 0),
(1475, 6084, 5, 76, 'Feasibility Study', 0),
(1476, 6084, 6, 76, 'All of the above', 0),
(1477, 6084, 7, 76, 'None of the above', 0),
(1478, 6084, 8, 76, 'Horizontal Prototype', 0),
(1479, 6084, 9, 76, 'It necessitates customer feedbacks.', 0),
(1480, 6084, 10, 76, 'Concurrent Development Model', 0),
(1481, 6084, 1, 76, 'Merging', 0),
(1482, 6084, 2, 76, 'Neil Armstrong', 0),
(1483, 6084, 3, 76, 'Name', 0),
(1484, 6084, 4, 76, 'Preliminary Investigation and Analysis', 0),
(1485, 6084, 5, 76, 'Feasibility Study', 0),
(1486, 6084, 6, 76, 'Specification freeze', 0),
(1487, 6084, 7, 76, 'Rapid Application Document', 0),
(1488, 6084, 8, 76, 'Vertical Prototype', 0),
(1489, 6084, 9, 76, 'It requires highly skilled developers/designers.', 0),
(1490, 6084, 10, 76, 'Concurrent Development Model', 0),
(1491, 6086, 1, 76, 'Merging', 0),
(1492, 6086, 2, 76, 'Of joining data from two or more tables.', 0),
(1493, 6086, 3, 76, 'Peter', 0),
(1494, 6086, 4, 76, 'Coding', 0),
(1495, 6086, 5, 76, 'System Planning', 0),
(1496, 6086, 6, 76, 'All of the above', 0),
(1497, 6086, 7, 76, 'None of the above', 0),
(1498, 6086, 8, 76, 'Vertical Prototype', 0),
(1499, 6086, 9, 76, 'It increases the component reusability.', 0),
(1500, 6086, 10, 76, 'Concurrent Development Model', 0),
(1501, 6086, 1, 76, 'Data manipulation', 0),
(1502, 6086, 2, 76, 'Neil Armstrong', 0),
(1503, 6086, 3, 76, 'Peter', 0),
(1504, 6086, 4, 76, 'System Design', 0),
(1505, 6086, 5, 76, 'System Analysis', 0),
(1506, 6086, 6, 76, 'All of the above', 0),
(1507, 6086, 7, 76, 'None of the above', 0),
(1508, 6086, 8, 76, 'Diagonal Prototype', 0),
(1509, 6086, 9, 76, 'It necessitates customer feedbacks.', 0),
(1510, 6086, 10, 76, 'Incremental Model', 0),
(1511, 6086, 1, 76, 'Merging', 0),
(1512, 6086, 2, 76, 'Neil Armstrong', 0),
(1513, 6086, 3, 76, 'Data', 0),
(1514, 6086, 4, 76, 'System Design', 0),
(1515, 6086, 5, 76, 'System Analysis', 0),
(1516, 6086, 6, 76, 'Specification freeze', 0),
(1517, 6086, 7, 76, 'Rapid Application Development', 0),
(1518, 6086, 8, 76, 'Domain Prototype', 0),
(1519, 6086, 9, 76, 'Both (a) & (c)', 0),
(1520, 6086, 10, 76, '\r\nAll of the above', 0),
(1521, 6086, 1, 76, 'Copying', 0),
(1522, 6086, 2, 76, 'Neil Armstrong', 0),
(1523, 6086, 3, 76, 'Name', 0),
(1524, 6086, 4, 76, 'Coding', 0),
(1525, 6086, 5, 76, 'Details of DFD', 0),
(1526, 6086, 6, 76, 'Sizing', 0),
(1527, 6086, 7, 76, 'Rapid Application Development', 0),
(1528, 6086, 8, 76, 'Diagonal Prototype', 0),
(1529, 6086, 9, 76, 'Both (a) & (c)', 0),
(1530, 6086, 10, 76, 'Incremental Model', 0),
(1531, 6086, 1, 76, 'Data manipulation', 0),
(1532, 6086, 2, 76, 'Of arranging the data in a table.', 0),
(1533, 6086, 3, 76, 'Data', 0),
(1534, 6086, 4, 76, 'System Testing', 0),
(1535, 6086, 5, 76, 'System Analysis', 0),
(1536, 6086, 6, 76, 'Sizing', 0),
(1537, 6086, 7, 76, 'Rapid Application Document', 0),
(1538, 6086, 8, 76, 'Horizontal Prototype', 0),
(1539, 6086, 9, 76, 'Both (a) & (c)', 0),
(1540, 6086, 10, 76, 'Concurrent Development Model', 0),
(1541, 6087, 1, 76, 'Data manipulation', 0),
(1542, 6087, 2, 76, 'Of performing corrections.', 0),
(1543, 6087, 3, 76, 'Field', 0),
(1544, 6087, 4, 76, 'Coding', 0),
(1545, 6087, 5, 76, 'Feasibility Study', 0),
(1546, 6087, 6, 76, 'Sizing', 0),
(1547, 6087, 7, 76, 'Relative Application Development', 0),
(1548, 6087, 8, 76, 'Domain Prototype', 0),
(1549, 6087, 9, 76, 'Both (a) & (c)', 0),
(1550, 6087, 10, 76, 'WINWIN Spiral Model', 0),
(1551, 6088, 1, 76, 'Merging', 0),
(1552, 6088, 2, 76, 'Of arranging the data in a table.', 0),
(1553, 6088, 3, 76, 'Field', 0),
(1554, 6088, 4, 76, 'System Design', 0),
(1555, 6088, 5, 76, 'Details of DFD', 0),
(1556, 6088, 6, 76, 'Specification freeze', 0),
(1557, 6088, 7, 76, 'Relative Application Development', 0),
(1558, 6088, 8, 76, 'Domain Prototype', 0),
(1559, 6088, 9, 76, 'It necessitates customer feedbacks.', 0),
(1560, 6088, 10, 76, 'WINWIN Spiral Model', 0),
(1561, 6088, 1, 76, 'Data manipulation', 0),
(1562, 6088, 2, 76, 'Of arranging the data in a table.', 0),
(1563, 6088, 3, 76, 'Data', 0),
(1564, 6088, 4, 76, 'Preliminary Investigation and Analysis', 0),
(1565, 6088, 5, 76, 'System Planning', 0),
(1566, 6088, 6, 76, 'Specification freeze', 0),
(1567, 6088, 7, 76, 'None of the above', 0),
(1568, 6088, 8, 76, 'Diagonal Prototype', 0),
(1569, 6088, 9, 76, 'Both (a) & (c)', 0),
(1570, 6088, 10, 76, 'Concurrent Development Model', 0),
(1571, 6088, 1, 76, 'Data manipulation', 0),
(1572, 6088, 2, 76, 'Of arranging the data in a table.', 0),
(1573, 6088, 3, 76, 'Data', 0),
(1574, 6088, 4, 76, 'Preliminary Investigation and Analysis', 0),
(1575, 6088, 5, 76, 'System Planning', 0),
(1576, 6088, 6, 76, 'Specification freeze', 0),
(1577, 6088, 7, 76, 'None of the above', 0),
(1578, 6088, 8, 76, 'Diagonal Prototype', 0),
(1579, 6088, 9, 76, 'Both (a) & (c)', 0),
(1580, 6088, 10, 76, 'Concurrent Development Model', 0),
(1581, 6088, 1, 76, 'Copying', 0),
(1582, 6088, 2, 76, 'Of performing corrections.', 0),
(1583, 6088, 3, 76, 'Data', 0),
(1584, 6088, 4, 76, 'System Design', 0),
(1585, 6088, 5, 76, 'System Planning', 0),
(1586, 6088, 6, 76, 'Parallel run', 0),
(1587, 6088, 7, 76, 'Rapid Application Development', 0),
(1588, 6088, 8, 76, 'Diagonal Prototype', 0),
(1589, 6088, 9, 76, 'It increases the component reusability.', 0),
(1590, 6088, 10, 76, '\r\nAll of the above', 0),
(1591, 6088, 1, 76, 'Data manipulation', 0),
(1592, 6088, 2, 76, 'Of arranging the data in a table.', 0),
(1593, 6088, 3, 76, 'Field', 0),
(1594, 6088, 4, 76, 'Coding', 0),
(1595, 6088, 5, 76, 'System Analysis', 0),
(1596, 6088, 6, 76, 'Specification freeze', 0),
(1597, 6088, 7, 76, 'Relative Application Development', 0),
(1598, 6088, 8, 76, 'Vertical Prototype', 0),
(1599, 6088, 9, 76, 'It increases the component reusability.', 0),
(1600, 6088, 10, 76, '\r\nAll of the above', 0),
(1601, 6088, 1, 76, 'Copying', 0),
(1602, 6088, 2, 76, 'Neil Armstrong', 0),
(1603, 6088, 3, 76, 'Peter', 0),
(1604, 6088, 4, 76, 'System Testing', 0),
(1605, 6088, 5, 76, 'System Planning', 0),
(1606, 6088, 6, 76, 'All of the above', 0),
(1607, 6088, 7, 76, 'Relative Application Development', 0),
(1608, 6088, 8, 76, 'Horizontal Prototype', 0),
(1609, 6088, 9, 76, 'Both (a) & (c)', 0),
(1610, 6088, 10, 76, '\r\nAll of the above', 0),
(1611, 6088, 1, 76, 'Ada Lovelace', 0),
(1612, 6088, 2, 76, 'Neil Armstrong', 0),
(1613, 6088, 3, 76, 'Name', 0),
(1614, 6088, 4, 76, 'System Testing', 0),
(1615, 6088, 5, 76, 'System Planning', 0),
(1616, 6088, 6, 76, 'Parallel run', 0),
(1617, 6088, 7, 76, 'None of the above', 0),
(1618, 6088, 8, 76, 'Vertical Prototype', 0),
(1619, 6088, 9, 76, 'Both (a) & (c)', 0),
(1620, 6088, 10, 76, 'Concurrent Development Model', 0),
(1621, 6088, 1, 76, 'Data manipulation', 0),
(1622, 6088, 2, 76, 'Of joining data from two or more tables.', 0),
(1623, 6088, 3, 76, 'Name', 0),
(1624, 6088, 4, 76, 'Preliminary Investigation and Analysis', 0),
(1625, 6088, 5, 76, 'Details of DFD', 0),
(1626, 6088, 6, 76, 'Parallel run', 0),
(1627, 6088, 7, 76, 'Rapid Application Document', 0),
(1628, 6088, 8, 76, 'Domain Prototype', 0),
(1629, 6088, 9, 76, 'It increases the component reusability.', 0),
(1630, 6088, 10, 76, 'Concurrent Development Model', 0),
(1631, 6088, 1, 76, 'Copying', 0),
(1632, 6088, 2, 76, 'Of performing corrections.', 0),
(1633, 6088, 3, 76, 'Field', 0),
(1634, 6088, 4, 76, 'Preliminary Investigation and Analysis', 0),
(1635, 6088, 5, 76, 'System Planning', 0),
(1636, 6088, 6, 76, 'Specification freeze', 0),
(1637, 6088, 7, 76, 'Relative Application Development', 0),
(1638, 6088, 8, 76, 'Diagonal Prototype', 0),
(1639, 6088, 9, 76, 'It increases the component reusability.', 0),
(1640, 6088, 10, 76, 'Concurrent Development Model', 0),
(1641, 6088, 1, 76, 'Copying', 0),
(1642, 6088, 2, 76, 'Of joining data from two or more tables.', 0),
(1643, 6088, 3, 76, 'Peter', 0),
(1644, 6088, 4, 76, 'Coding', 0),
(1645, 6088, 5, 76, 'Details of DFD', 0),
(1646, 6088, 6, 76, 'Specification freeze', 0),
(1647, 6088, 7, 76, 'None of the above', 0),
(1648, 6088, 8, 76, 'Vertical Prototype', 0),
(1649, 6088, 9, 76, 'Both (a) & (c)', 0),
(1650, 6088, 10, 76, 'Incremental Model', 0),
(1651, 6088, 1, 76, 'Data manipulation', 0),
(1652, 6088, 2, 76, 'Neil Armstrong', 0),
(1653, 6088, 3, 76, 'Data', 0),
(1654, 6088, 4, 76, 'System Design', 0),
(1655, 6088, 5, 76, 'System Planning', 0),
(1656, 6088, 6, 76, 'Parallel run', 0),
(1657, 6088, 7, 76, 'None of the above', 0),
(1658, 6088, 8, 76, 'Domain Prototype', 0),
(1659, 6088, 9, 76, 'It necessitates customer feedbacks.', 0),
(1660, 6088, 10, 76, 'Concurrent Development Model', 0),
(1661, 6088, 1, 76, 'Data manipulation', 0),
(1662, 6088, 2, 76, 'Of joining data from two or more tables.', 0),
(1663, 6088, 3, 76, 'Peter', 0),
(1664, 6088, 4, 76, 'Coding', 0),
(1665, 6088, 5, 76, 'Details of DFD', 0),
(1666, 6088, 6, 76, 'Parallel run', 0),
(1667, 6088, 7, 76, 'None of the above', 0),
(1668, 6088, 8, 76, 'Horizontal Prototype', 0),
(1669, 6088, 9, 76, 'It requires highly skilled developers/designers.', 0),
(1670, 6088, 10, 76, 'Incremental Model', 0),
(1671, 6088, 1, 76, 'Ada Lovelace', 0),
(1672, 6088, 2, 76, 'Of arranging the data in a table.', 0),
(1673, 6088, 3, 76, 'Peter', 0),
(1674, 6088, 4, 76, 'System Testing', 0),
(1675, 6088, 5, 76, 'System Analysis', 0),
(1676, 6088, 6, 76, 'Specification freeze', 0),
(1677, 6088, 7, 76, 'None of the above', 0),
(1678, 6088, 8, 76, 'Horizontal Prototype', 0),
(1679, 6088, 9, 76, 'Both (a) & (c)', 0),
(1680, 6088, 10, 76, 'WINWIN Spiral Model', 0),
(1681, 6088, 1, 76, 'Data manipulation', 0),
(1682, 6088, 2, 76, 'Of joining data from two or more tables.', 0),
(1683, 6088, 3, 76, 'Data', 0),
(1684, 6088, 4, 76, 'System Design', 0),
(1685, 6088, 5, 76, 'System Planning', 0),
(1686, 6088, 6, 76, 'All of the above', 0),
(1687, 6088, 7, 76, 'Rapid Application Document', 0),
(1688, 6088, 8, 76, 'Vertical Prototype', 0),
(1689, 6088, 9, 76, 'It requires highly skilled developers/designers.', 0),
(1690, 6088, 10, 76, 'Incremental Model', 0),
(1691, 6093, 1, 76, 'Copying', 0),
(1692, 6093, 2, 76, 'Of performing corrections.', 0),
(1693, 6093, 3, 76, 'Field', 0),
(1694, 6093, 4, 76, 'System Design', 0),
(1695, 6093, 5, 76, 'System Analysis', 0),
(1696, 6093, 6, 76, 'Specification freeze', 0),
(1697, 6093, 7, 76, 'Rapid Application Development', 0),
(1698, 6093, 8, 76, 'Domain Prototype', 0),
(1699, 6093, 9, 76, 'It requires highly skilled developers/designers.', 0),
(1700, 6093, 10, 76, 'WINWIN Spiral Model', 0),
(1701, 6094, 1, 76, 'Copying', 0),
(1702, 6094, 2, 76, 'Of joining data from two or more tables.', 0),
(1703, 6094, 3, 76, 'Data', 0),
(1704, 6094, 4, 76, 'Preliminary Investigation and Analysis', 0),
(1705, 6094, 5, 76, 'Feasibility Study', 0),
(1706, 6094, 6, 76, 'Sizing', 0),
(1707, 6094, 7, 76, 'Rapid Application Document', 0),
(1708, 6094, 8, 76, 'Horizontal Prototype', 0),
(1709, 6094, 9, 76, 'It requires highly skilled developers/designers.', 0),
(1710, 6094, 10, 76, '\r\nAll of the above', 0),
(1711, 6095, 1, 76, 'Copying', 0),
(1712, 6095, 2, 76, 'Neil Armstrong', 0),
(1713, 6095, 3, 76, 'Field', 0),
(1714, 6095, 4, 76, 'Coding', 0),
(1715, 6095, 5, 76, 'System Planning', 0),
(1716, 6095, 6, 76, 'All of the above', 0),
(1717, 6095, 7, 76, 'Relative Application Development', 0),
(1718, 6095, 8, 76, 'Domain Prototype', 0),
(1719, 6095, 9, 76, 'Both (a) & (c)', 0),
(1720, 6095, 10, 76, 'Incremental Model', 0),
(1721, 6096, 1, 70, 'Data manipulation', 0),
(1722, 6096, 2, 70, 'Neil Armstrong', 0),
(1723, 6096, 3, 70, 'Peter', 0),
(1724, 6096, 4, 70, 'System Testing', 0),
(1725, 6096, 5, 70, 'System Analysis', 0),
(1726, 6096, 6, 70, 'Sizing', 0),
(1727, 6096, 7, 70, 'None of the above', 0),
(1728, 6096, 8, 70, 'Horizontal Prototype', 0),
(1729, 6096, 9, 70, 'It requires highly skilled developers/designers.', 0),
(1730, 6096, 10, 70, 'WINWIN Spiral Model', 0),
(1731, 6098, 1, 76, 'Merging', 0),
(1732, 6098, 2, 76, 'Of arranging the data in a table.', 0),
(1733, 6098, 3, 76, 'Data', 0),
(1734, 6098, 4, 76, 'System Design', 0),
(1735, 6098, 5, 76, 'Details of DFD', 0),
(1736, 6098, 6, 76, 'Parallel run', 0),
(1737, 6098, 7, 76, 'None of the above', 0),
(1738, 6098, 8, 76, 'Horizontal Prototype', 0),
(1739, 6098, 9, 76, 'It requires highly skilled developers/designers.', 0),
(1740, 6098, 10, 76, '\r\nAll of the above', 0),
(1741, 6098, 1, 76, 'Merging', 0),
(1742, 6098, 2, 76, 'Of arranging the data in a table.', 0),
(1743, 6098, 3, 76, 'Data', 0),
(1744, 6098, 4, 76, 'System Design', 0),
(1745, 6098, 5, 76, 'Details of DFD', 0),
(1746, 6098, 6, 76, 'Parallel run', 0),
(1747, 6098, 7, 76, 'None of the above', 0),
(1748, 6098, 8, 76, 'Horizontal Prototype', 0),
(1749, 6098, 9, 76, 'It requires highly skilled developers/designers.', 0),
(1750, 6098, 10, 76, '\r\nAll of the above', 0),
(1751, 6099, 1, 93, 'Ada Lovelace', 0),
(1752, 6099, 2, 93, 'Of arranging the data in a table.', 0),
(1753, 6099, 3, 93, 'Name', 0),
(1754, 6099, 4, 93, 'System Testing', 0),
(1755, 6099, 5, 93, 'Details of DFD', 0),
(1756, 6099, 6, 93, 'All of the above', 0),
(1757, 6099, 7, 93, 'Rapid Application Document', 0),
(1758, 6099, 8, 93, 'Vertical Prototype', 0),
(1759, 6099, 9, 93, 'Both (a) & (c)', 0),
(1760, 6099, 10, 93, 'WINWIN Spiral Model', 0),
(1761, 6100, 1, 70, 'Data manipulation', 0),
(1762, 6100, 2, 70, 'Of arranging the data in a table.', 0),
(1763, 6100, 3, 70, 'Data', 0),
(1764, 6100, 4, 70, 'Preliminary Investigation and Analysis', 0),
(1765, 6100, 5, 70, 'Feasibility Study', 0),
(1766, 6100, 6, 70, 'Parallel run', 0),
(1767, 6100, 7, 70, 'Relative Application Development', 0),
(1768, 6100, 8, 70, 'Horizontal Prototype', 0),
(1769, 6100, 9, 70, 'It necessitates customer feedbacks.', 0),
(1770, 6100, 10, 70, 'Incremental Model', 0),
(1771, 6100, 1, 70, 'Data manipulation', 0),
(1772, 6100, 2, 70, 'Of arranging the data in a table.', 0),
(1773, 6100, 3, 70, 'Data', 0),
(1774, 6100, 4, 70, 'Preliminary Investigation and Analysis', 0),
(1775, 6100, 5, 70, 'Feasibility Study', 0),
(1776, 6100, 6, 70, 'Parallel run', 0),
(1777, 6100, 7, 70, 'Relative Application Development', 0),
(1778, 6100, 8, 70, 'Horizontal Prototype', 0),
(1779, 6100, 9, 70, 'It necessitates customer feedbacks.', 0),
(1780, 6100, 10, 70, 'Incremental Model', 0),
(1781, 6100, 1, 70, 'Data manipulation', 0),
(1782, 6100, 2, 70, 'Of arranging the data in a table.', 0),
(1783, 6100, 3, 70, 'Data', 0),
(1784, 6100, 4, 70, 'Preliminary Investigation and Analysis', 0),
(1785, 6100, 5, 70, 'Feasibility Study', 0),
(1786, 6100, 6, 70, 'Parallel run', 0),
(1787, 6100, 7, 70, 'Relative Application Development', 0),
(1788, 6100, 8, 70, 'Horizontal Prototype', 0),
(1789, 6100, 9, 70, 'It necessitates customer feedbacks.', 0),
(1790, 6100, 10, 70, 'Incremental Model', 0),
(1791, 6100, 1, 70, 'Data manipulation', 0),
(1792, 6100, 2, 70, 'Of arranging the data in a table.', 0),
(1793, 6100, 3, 70, 'Data', 0),
(1794, 6100, 4, 70, 'Preliminary Investigation and Analysis', 0),
(1795, 6100, 5, 70, 'Feasibility Study', 0),
(1796, 6100, 6, 70, 'Parallel run', 0),
(1797, 6100, 7, 70, 'Relative Application Development', 0),
(1798, 6100, 8, 70, 'Horizontal Prototype', 0),
(1799, 6100, 9, 70, 'It necessitates customer feedbacks.', 0),
(1800, 6100, 10, 70, 'Incremental Model', 0),
(1801, 6100, 1, 70, 'Data manipulation', 0),
(1802, 6100, 2, 70, 'Of performing corrections.', 0),
(1803, 6100, 3, 70, 'Data', 0),
(1804, 6100, 4, 70, 'Coding', 0),
(1805, 6100, 5, 70, 'System Planning', 0),
(1806, 6100, 6, 70, 'Parallel run', 0),
(1807, 6100, 7, 70, 'None of the above', 0),
(1808, 6100, 8, 70, 'Diagonal Prototype', 0),
(1809, 6100, 9, 70, 'It requires highly skilled developers/designers.', 0),
(1810, 6100, 10, 70, 'WINWIN Spiral Model', 0),
(1811, 6100, 1, 70, 'Copying', 0),
(1812, 6100, 2, 70, 'Neil Armstrong', 0),
(1813, 6100, 3, 70, 'Name', 0),
(1814, 6100, 4, 70, 'System Design', 0),
(1815, 6100, 5, 70, 'Details of DFD', 0),
(1816, 6100, 6, 70, 'All of the above', 0),
(1817, 6100, 7, 70, 'Relative Application Development', 0),
(1818, 6100, 8, 70, 'Vertical Prototype', 0),
(1819, 6100, 9, 70, 'Both (a) & (c)', 0),
(1820, 6100, 10, 70, '\r\nAll of the above', 0),
(1821, 6100, 1, 70, 'Data manipulation', 0),
(1822, 6100, 2, 70, 'Of joining data from two or more tables.', 0),
(1823, 6100, 3, 70, 'Field', 0),
(1824, 6100, 4, 70, 'System Testing', 0),
(1825, 6100, 5, 70, 'Feasibility Study', 0),
(1826, 6100, 6, 70, 'All of the above', 0),
(1827, 6100, 7, 70, 'Relative Application Development', 0),
(1828, 6100, 8, 70, 'Diagonal Prototype', 0),
(1829, 6100, 9, 70, 'Both (a) & (c)', 0),
(1830, 6100, 10, 70, 'Incremental Model', 0),
(1831, 6100, 1, 70, 'Data manipulation', 0),
(1832, 6100, 2, 70, 'Of joining data from two or more tables.', 0),
(1833, 6100, 3, 70, 'Field', 0),
(1834, 6100, 4, 70, 'System Testing', 0),
(1835, 6100, 5, 70, 'Feasibility Study', 0),
(1836, 6100, 6, 70, 'All of the above', 0),
(1837, 6100, 7, 70, 'Relative Application Development', 0),
(1838, 6100, 8, 70, 'Diagonal Prototype', 0),
(1839, 6100, 9, 70, 'Both (a) & (c)', 0),
(1840, 6100, 10, 70, 'Incremental Model', 0),
(1841, 6100, 1, 70, 'Data manipulation', 0),
(1842, 6100, 2, 70, 'Of joining data from two or more tables.', 0),
(1843, 6100, 3, 70, 'Field', 0),
(1844, 6100, 4, 70, 'System Testing', 0),
(1845, 6100, 5, 70, 'Feasibility Study', 0),
(1846, 6100, 6, 70, 'All of the above', 0),
(1847, 6100, 7, 70, 'Relative Application Development', 0),
(1848, 6100, 8, 70, 'Diagonal Prototype', 0),
(1849, 6100, 9, 70, 'Both (a) & (c)', 0),
(1850, 6100, 10, 70, 'Incremental Model', 0),
(1851, 6100, 1, 70, 'Data manipulation', 0),
(1852, 6100, 2, 70, 'Of joining data from two or more tables.', 0),
(1853, 6100, 3, 70, 'Field', 0),
(1854, 6100, 4, 70, 'System Testing', 0),
(1855, 6100, 5, 70, 'Feasibility Study', 0),
(1856, 6100, 6, 70, 'All of the above', 0),
(1857, 6100, 7, 70, 'Relative Application Development', 0),
(1858, 6100, 8, 70, 'Diagonal Prototype', 0),
(1859, 6100, 9, 70, 'Both (a) & (c)', 0),
(1860, 6100, 10, 70, 'Incremental Model', 0),
(1861, 6100, 1, 70, 'Data manipulation', 0),
(1862, 6100, 2, 70, 'Of joining data from two or more tables.', 0),
(1863, 6100, 3, 70, 'Field', 0),
(1864, 6100, 4, 70, 'System Testing', 0),
(1865, 6100, 5, 70, 'Feasibility Study', 0),
(1866, 6100, 6, 70, 'All of the above', 0),
(1867, 6100, 7, 70, 'Relative Application Development', 0),
(1868, 6100, 8, 70, 'Diagonal Prototype', 0),
(1869, 6100, 9, 70, 'Both (a) & (c)', 0),
(1870, 6100, 10, 70, 'Incremental Model', 0),
(1871, 6100, 1, 70, 'Data manipulation', 0),
(1872, 6100, 2, 70, 'Of performing corrections.', 0),
(1873, 6100, 3, 70, 'Peter', 0),
(1874, 6100, 4, 70, 'System Testing', 0),
(1875, 6100, 5, 70, 'System Planning', 0),
(1876, 6100, 6, 70, 'All of the above', 0),
(1877, 6100, 7, 70, 'None of the above', 0),
(1878, 6100, 8, 70, 'Domain Prototype', 0),
(1879, 6100, 9, 70, 'It increases the component reusability.', 0),
(1880, 6100, 10, 70, '\r\nAll of the above', 0),
(1881, 6100, 1, 70, 'Data manipulation', 0),
(1882, 6100, 2, 70, 'Of performing corrections.', 0),
(1883, 6100, 3, 70, 'Peter', 0),
(1884, 6100, 4, 70, 'System Testing', 0),
(1885, 6100, 5, 70, 'System Planning', 0),
(1886, 6100, 6, 70, 'All of the above', 0),
(1887, 6100, 7, 70, 'None of the above', 0),
(1888, 6100, 8, 70, 'Domain Prototype', 0),
(1889, 6100, 9, 70, 'It increases the component reusability.', 0),
(1890, 6100, 10, 70, '\r\nAll of the above', 0),
(1891, 6100, 1, 70, 'Copying', 0),
(1892, 6100, 2, 70, 'Of arranging the data in a table.', 0),
(1893, 6100, 3, 70, 'Data', 0),
(1894, 6100, 4, 70, 'System Design', 0),
(1895, 6100, 5, 70, 'System Analysis', 0),
(1896, 6100, 6, 70, 'Specification freeze', 0),
(1897, 6100, 7, 70, 'Rapid Application Document', 0),
(1898, 6100, 8, 70, 'Diagonal Prototype', 0),
(1899, 6100, 9, 70, 'It requires highly skilled developers/designers.', 0),
(1900, 6100, 10, 70, 'Incremental Model', 0),
(1901, 6100, 1, 70, 'Data manipulation', 0),
(1902, 6100, 2, 70, 'Neil Armstrong', 0),
(1903, 6100, 3, 70, 'Peter', 0),
(1904, 6100, 4, 70, 'Preliminary Investigation and Analysis', 0),
(1905, 6100, 5, 70, 'System Planning', 0),
(1906, 6100, 6, 70, 'Parallel run', 0),
(1907, 6100, 7, 70, 'Relative Application Development', 0),
(1908, 6100, 8, 70, 'Diagonal Prototype', 0),
(1909, 6100, 9, 70, 'It increases the component reusability.', 0),
(1910, 6100, 10, 70, 'WINWIN Spiral Model', 0),
(1911, 6100, 1, 70, 'Merging', 0),
(1912, 6100, 2, 70, 'Of arranging the data in a table.', 0),
(1913, 6100, 3, 70, 'Field', 0),
(1914, 6100, 4, 70, 'Preliminary Investigation and Analysis', 0),
(1915, 6100, 5, 70, 'System Analysis', 0),
(1916, 6100, 6, 70, 'Sizing', 0),
(1917, 6100, 7, 70, 'Rapid Application Document', 0),
(1918, 6100, 8, 70, 'Domain Prototype', 0),
(1919, 6100, 9, 70, 'Both (a) & (c)', 0),
(1920, 6100, 10, 70, 'Concurrent Development Model', 0),
(1921, 6103, 1, 70, 'Ada Lovelace', 0),
(1922, 6103, 2, 70, 'Of joining data from two or more tables.', 0),
(1923, 6103, 3, 70, 'Peter', 0),
(1924, 6103, 4, 70, 'System Design', 0),
(1925, 6103, 5, 70, 'System Analysis', 0),
(1926, 6103, 6, 70, 'Specification freeze', 0),
(1927, 6103, 7, 70, 'None of the above', 0),
(1928, 6103, 8, 70, 'Diagonal Prototype', 0),
(1929, 6103, 9, 70, 'It requires highly skilled developers/designers.', 0),
(1930, 6103, 10, 70, 'Incremental Model', 0),
(1931, 6104, 1, 96, 'Merging', 0),
(1932, 6104, 2, 96, 'Neil Armstrong', 0),
(1933, 6104, 3, 96, 'Field', 0),
(1934, 6104, 4, 96, 'System Testing', 0),
(1935, 6104, 5, 96, 'System Planning', 0),
(1936, 6104, 6, 96, 'Parallel run', 0),
(1937, 6104, 7, 96, 'Rapid Application Document', 0),
(1938, 6104, 8, 96, 'Vertical Prototype', 0),
(1939, 6104, 9, 96, 'It increases the component reusability.', 0),
(1940, 6104, 10, 96, 'Concurrent Development Model', 0);

-- --------------------------------------------------------

--
-- Table structure for table `final_exam`
--

CREATE TABLE `final_exam` (
  `q_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` text NOT NULL,
  `question_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_exam`
--

INSERT INTO `final_exam` (`q_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `question_status`) VALUES
(1, '1. What is 2 + 2?', '1', '4', '3', '2', '4', 0),
(2, '2. What is 1-1?', '19', '0', '1', '3', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questionaire`
--

CREATE TABLE `questionaire` (
  `q_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` text NOT NULL,
  `questionaire_status` int(1) NOT NULL COMMENT '0-enabled, 1-disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionaire`
--

INSERT INTO `questionaire` (`q_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `questionaire_status`) VALUES
(1, '1. Who is the first programmer?', 'Ada Lovelace', 'Merging', 'Data manipulation', 'Copying', 'Ada Lovelace', 0),
(2, '2. Who is the first astronaut to land on the moon?', 'Of arranging the data in a table.', 'Of joining data from two or more tables.', 'Neil Armstrong', 'Of performing corrections.', 'Neil Armstrong', 0),
(3, '3. First pope in the catholic church', 'Name', 'Field', 'Peter', 'Data', 'Peter', 0),
(4, '4. What is the first step in the software development lifecycle? ', 'System Design', 'Coding', 'System Testing', 'Preliminary Investigation and Analysis', 'Preliminary Investigation and Analysis', 0),
(5, '5. What does the study of an existing system refer to? ', 'Details of DFD', 'Feasibility Study', 'System Analysis', 'System Planning', 'System Analysis', 0),
(6, '6. Which of the following is involved in the system planning and designing phase of the Software Development Life Cycle (SDLC)?', 'Sizing', 'Parallel run', 'Specification freeze', 'All of the above', 'All of the above', 0),
(7, '7. What does RAD stand for? ', 'Rapid Application Document', 'Rapid Application Development', 'Relative Application Development', 'None of the above', 'Rapid Application Development', 0),
(8, '8. Which of the following prototypes does not associated with Prototyping Model? ', 'Domain Prototype', 'Vertical Prototype', 'Horizontal Prototype', 'Diagonal Prototype', 'Diagonal Prototype', 0),
(9, '9. The major drawback of RAD model is __________. ', 'It requires highly skilled developers/designers.', 'It necessitates customer feedbacks.', 'It increases the component reusability.', 'Both (a) & (c)', 'Both (a) & (c)', 0),
(10, '10. Which of the following does not relate to Evolutionary Process Model?', 'Incremental Model', 'Concurrent Development Model', 'WINWIN Spiral Model', '\r\nAll of the above', '\r\nAll of the above', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `user_type` int(1) NOT NULL COMMENT '1 admin, 2 student',
  `user_image` text NOT NULL,
  `user_status` int(1) NOT NULL COMMENT '1 deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `firstname`, `lastname`, `date_of_birth`, `contact`, `email`, `username`, `password`, `user_type`, `user_image`, `user_status`) VALUES
(95, 'Evemil', 'Berdin', '2023-01-25', '1231-123-1234', 'evemilberdin25@gmail.com', 'admin', 'ab4b5d68d9cdc1b3904606693b8ffc94', 1, 'evemil.png', 0),
(96, 'Demo', 'Test', '', '1234-123-1234', 'demotest@gmail.com', 'student', '36fc3908a5feadc28a2f22d3117f6076', 2, 'user_default.png', 0),
(97, '123123123123123', 'Humphrey', '', '1234-123-1234', 'zunyc@mailinator.com', 'junen', 'd41d8cd98f00b204e9800998ecf8427e', 2, 'evemil.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD PRIMARY KEY (`ed_id`);

--
-- Indexes for table `final_exam`
--
ALTER TABLE `final_exam`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `questionaire`
--
ALTER TABLE `questionaire`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6105;

--
-- AUTO_INCREMENT for table `exam_details`
--
ALTER TABLE `exam_details`
  MODIFY `ed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1941;

--
-- AUTO_INCREMENT for table `final_exam`
--
ALTER TABLE `final_exam`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questionaire`
--
ALTER TABLE `questionaire`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
