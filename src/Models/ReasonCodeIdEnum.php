<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Response reason code that provides more detail as to the result of the transaction. The reason code
 * list can be found here: Response Reason Codes
 * >0 - N/A
 * >
 * >1000 - CC - Approved / ACH - Accepted
 * >
 * >1000 - CC - Approved / ACH - Accepted
 * >
 * >1001 - AuthCompleted
 * >
 * >1002 - Forced
 * >
 * >1003 - AuthOnly Declined
 * >
 * >1004 - Validation Failure (System Run Trx)
 * >
 * >1005 - Processor Response Invalid
 * >
 * >1200 - Voided
 * >
 * >1201 - Partial Approval
 * >
 * >1240 - Approved, optional fields are missing (Paya ACH only)
 * >
 * >1301 - Account Deactivated for Fraud
 * >
 * >1302-1399 - Reserved for Future Fraud Reason Codes
 * >
 * >1500 - Generic Decline
 * >
 * >1510 - Call
 * >
 * >1518 - Transaction Not Permitted - Terminal
 * >
 * >1520 - Pickup Card
 * >
 * >1530 - Retry Trx
 * >
 * >1531 - Communication Error
 * >
 * >1540 - Setup Issue, contact Support
 * >
 * >1541 - Device is not signature capable
 * >
 * >1588 - Data could not be de-tokenized
 * >
 * >1599 - Other Reason
 * >
 * >1601 - Generic Decline
 * >
 * >1602 - Call
 * >
 * >1603 - No Reply
 * >
 * >1604 - Pickup Card - No Fraud
 * >
 * >1605 - Pickup Card - Fraud
 * >
 * >1606 - Pickup Card - Lost
 * >
 * >1607 - Pickup Card - Stolen
 * >
 * >1608 - Account Error
 * >
 * >1609 - Already Reversed
 * >
 * >1610 - Bad PIN
 * >
 * >1611 - Cashback Exceeded
 * >
 * >1612 - Cashback Not Available
 * >
 * >1613 - CID Error
 * >
 * >1614 - Date Error
 * >
 * >1615 - Do Not Honor
 * >
 * >1616 - NSF
 * >
 * >1618 - Invalid Service Code
 * >
 * >1619 - Exceeded activity limit
 * >
 * >1620 - Violation
 * >
 * >1621 - Encryption Error
 * >
 * >1622 - Card Expired
 * >
 * >1623 - Renter
 * >
 * >1624 - Security Violation
 * >
 * >1625 - Card Not Permitted
 * >
 * >1626 - Trans Not Permitted
 * >
 * >1627 - System Error
 * >
 * >1628 - Bad Merchant ID
 * >
 * >1629 - Duplicate Batch (Already Closed)
 * >
 * >1630 - Batch Rejected
 * >
 * >1631 - Account Closed
 * >
 * >1632 - PIN tries exceeded
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >1640 - Required fields are missing (ACH only)
 * >
 * >1641 - Previously declined transaction (1640)
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >
 * >1650 - Contact Support
 * >
 * >1651 - Max Sending - Throttle Limit Hit (ACH only)
 * >
 * >1652 - Max Attempts Exceeded
 * >
 * >1653 - Contact Support
 * >
 * >1654 - Voided - Online Reversal Failed
 * >
 * >1655 - Decline (AVS Auto Reversal)
 * >
 * >1656 - Decline (CVV Auto Reversal)
 * >
 * >1657 - Decline (Partial Auth Auto Reversal)
 * >
 * >1658 - Expired Authorization
 * >
 * >1659 - Declined - Partial Approval not Supported
 * >
 * >1660 - Bank Account Error, please delete and re-add Token
 * >
 * >1661 - Declined AuthIncrement
 * >
 * >1662 - Auto Reversal - Processor can't settle
 * >
 * >1663 - Manager Needed (Needs override transaction)
 * >
 * >1664 - Token Not Found: Sharing Group Unavailable
 * >
 * >1665 - Contact Not Found: Sharing Group Unavailable
 * >
 * >1666 - Amount Error
 * >
 * >1667 - Action Not Allowed in Current State
 * >
 * >1668 - Original Authorization Not Valid
 * >
 * >1701 - Chip Reject
 * >
 * >1800 - Incorrect CVV
 * >
 * >1801 - Duplicate Transaction
 * >
 * >1802 - MID/TID Not Registered
 * >
 * >1803 - Stop Recurring
 * >
 * >1804 - No Transactions in Batch
 * >
 * >1805 - Batch Does Not Exist
 * >
 * >
 * >
 * **ACH Reject Reason Codes**
 * | Code | E-Code | Verbiage | Short Description | Long Description |
 * | ----------- | ----------- | ----------- | ----------- | ----------- |
 * | 2101 | Rejected-R01 |  | Insufficient funds | Available balance is not sufficient to cover the
 * amount of the debit entry |
 * | 2102 | Rejected-R02  | E02 | Bank account closed | Previously active amount has been closed by the
 * customer of RDFI |
 * | 2103 | Rejected-R03 | E03 | No bank account/unable to locate account | Account number does not
 * correspond to the individual identified in the entry, or the account number designated is not an
 * open account |
 * | 2104 | Rejected-R04  | E04 | Invalid bank account number | Account number structure is not valid
 * |
 * | 2105 | Rejected-R05  | E05 | Reserved | Currently not in use |
 * | 2106 | Rejected-R06 |  | Returned per ODFI request | ODFI requested the RDFI to return the entry
 * |
 * | 2107 | Rejected-R07 | E07 | Authorization revoked by customer | Receiver has revoked authorization
 * |
 * | 2108 | Rejected-R08 | E08 | Payment stopped | Receiver of a recurring debit has stopped payment of
 * an entry |
 * | 2109 | Rejected-R09 |  | Uncollected funds | Collected funds are not sufficient for payment of the
 * debit entry |
 * | 2110 | Rejected-R10 | E10 | Customer Advises Originator is Not Known to Receiver and/or Is Not
 * Authorized by Receiver to Debit Receiver’s Account | Receiver has advised RDFI that originator is
 * not authorized to debit his bank account |
 * | 2111 | Rejected-R11 |  | Customer Advises Entry Not In Accordance with the Terms of the
 * Authorization | To be used when there is an error in the authorization |
 * | 2112 | Rejected-R12 |  | Branch sold to another RDFI | RDFI unable to post entry destined for a
 * bank account maintained at a branch sold to another financial institution |
 * | 2113 | Rejected-R13 |  | RDFI not qualified to participate | Financial institution does not
 * receive commercial ACH entries |
 * | 2114 | Rejected-R14 | E14 | Representative payee deceased or unable to continue in that capacity |
 * The representative payee authorized to accept entries on behalf of a beneficiary is either deceased
 * or unable to continue in that capacity |
 * | 2115 | Rejected-R15 | E15 | Beneficiary or bank account holder deceased | (Other than
 * representative payee) deceased* - (1) the beneficiary entitled to payments is deceased or (2) the
 * bank account holder other than a representative payee is deceased |
 * | 2116 | Rejected-R16 | E16 | Bank account frozen | Funds in bank account are unavailable due to
 * action by RDFI or legal order |
 * | 2117 | Rejected-R17 |  | File record edit criteria | Entry with Invalid Account Number Initiated
 * Under Questionable Circumstances |
 * | 2118 | Rejected-R18 |  | Improper effective entry date | Entries have been presented prior to the
 * first available processing window for the effective date. |
 * | 2119 | Rejected-R19 |  | Amount field error | Improper formatting of the amount field |
 * | 2120 | Rejected-R20 |  | Non-payment bank account | Entry destined for non-payment bank account
 * defined by reg. |
 * | 2121 | Rejected-R21 |  | Invalid company Identification | The company ID information not valid
 * (normally CIE entries) |
 * | 2122 | Rejected-R22 |  | Invalid individual ID number | Individual id used by receiver is
 * incorrect (CIE entries) |
 * | 2123 | Rejected-R23 |  | Credit entry refused by receiver | Receiver returned entry because
 * minimum or exact amount not remitted, bank account is subject to litigation, or payment represents
 * an overpayment, originator is not known to receiver or receiver has not authorized this credit entry
 * to this bank account |
 * | 2124 | Rejected-R24 |  | Duplicate entry | RDFI has received a duplicate entry |
 * | 2125 | Rejected-R25 |  | Addenda error | Improper formatting of the addenda record information |
 * | 2126 | Rejected-R26 |  | Mandatory field error | Improper information in one of the mandatory
 * fields |
 * | 2127 | Rejected-R27 |  | Trace number error | Original entry trace number is not valid for return
 * entry; or addenda trace numbers do not correspond with entry detail record |
 * | 2128 | Rejected-R28 |  | Transit routing number check digit error | Check digit for the transit
 * routing number is incorrect |
 * | 2129 | Rejected-R29 | E29 | Corporate customer advises not authorized | RDFI has been notified by
 * corporate receiver that debit entry of originator is not authorized |
 * | 2130 | Rejected-R30 |  | RDFI not participant in check truncation program | Financial institution
 * not participating in automated check safekeeping application |
 * | 2131 | Rejected-R31 |  | Permissible return entry (CCD and CTX only) | RDFI has been notified by
 * the ODFI that it agrees to accept a CCD or CTX return entry |
 * | 2132 | Rejected-R32 |  | RDFI non-settlement | RDFI is not able to settle the entry |
 * | 2133 | Rejected-R33 |  | Return of XCK entry | RDFI determines at its sole discretion to return an
 * XCK entry; an XCK return entry may be initiated by midnight of the sixtieth day following the
 * settlement date if the XCK entry |
 * | 2134 | Rejected-R34 |  | Limited participation RDFI | RDFI participation has been limited by a
 * federal or state supervisor |
 * | 2135 | Rejected-R35 |  | Return of improper debit entry | ACH debit not permitted for use with the
 * CIE standard entry class code (except for reversals) |
 * | 2136 | Rejected-R36 |  | Return of Improper Credit Entry |  |
 * | 2137 | Rejected-R37 |  | Source Document Presented for Payment |  |
 * | 2138 | Rejected-R38 |  | Stop Payment on Source Document |  |
 * | 2139 | Rejected-R39 |  | Improper Source Document |  |
 * | 2140 | Rejected-R40 |  | Return of ENR Entry by Federal Government Agency |  |
 * | 2141 | Rejected-R41 |  | Invalid Transaction Code |  |
 * | 2142 | Rejected-R42 |  | Routing Number/Check Digit Error |  |
 * | 2143 | Rejected-R43 |  | Invalid DFI Account Number |  |
 * | 2144 | Rejected-R44 |  | Invalid Individual ID Number/Identification |  |
 * | 2145 | Rejected-R45 |  | Invalid Individual Name/Company Name |  |
 * | 2146 | Rejected-R46 |  | Invalid Representative Payee Indicator |  |
 * | 2147 | Rejected-R47 |  | Duplicate Enrollment |  |
 * | 2150 | Rejected-R50 |  | State Law Affecting RCK Acceptance |  |
 * | 2151 | Rejected-R51 |  | Item is Ineligible, Notice Not Provided, etc. |  |
 * | 2152 | Rejected-R52 |  | Stop Payment on Item (adjustment entries) |  |
 * | 2153 | Rejected-R53 |  | Item and ACH Entry Presented for Payment |  |
 * | 2161 | Rejected-R61 |  | Misrouted Return |  |
 * | 2162 | Rejected-R62 |  | Incorrect Trace Number |  |
 * | 2163 | Rejected-R63 |  | Incorrect Dollar Amount |  |
 * | 2164 | Rejected-R64 |  | Incorrect Individual Identification |  |
 * | 2165 | Rejected-R65 |  | Incorrect Transaction Code |  |
 * | 2166 | Rejected-R66 |  | Incorrect Company Identification |  |
 * | 2167 | Rejected-R67 |  | Duplicate Return |  |
 * | 2168 | Rejected-R68 |  | Untimely Return |  |
 * | 2169 | Rejected-R69 |  | Multiple Errors |  |
 * | 2170 | Rejected-R70 |  | Permissible Return Entry Not Accepted |  |
 * | 2171 | Rejected-R71 |  | Misrouted Dishonored Return |  |
 * | 2172 | Rejected-R72 |  | Untimely Dishonored Return |  |
 * | 2173 | Rejected-R73 |  | Timely Original Return |  |
 * | 2174 | Rejected-R74 |  | Corrected Return |  |
 * | 2180 | Rejected-R80 |  | Cross-Border Payment Coding Error |  |
 * | 2181 | Rejected-R81 |  | Non-Participant in Cross-Border Program |  |
 * | 2182 | Rejected-R82 |  | Invalid Foreign Receiving DFI Identification |  |
 * | 2183 | Rejected-R83 |  | Foreign Receiving DFI Unable to Settle |  |
 * | 2200 | Voided |  | Processor Void | The transaction was voided by the processor before being sent
 * to the bank |
 * | 2201 | Rejected-C01 |  |  |  |
 * | 2202 | Rejected-C02 |  |  |  |
 * | 2203 | Rejected-C03 |  |  |  |
 * | 2204 | Rejected-C04 |  |  |  |
 * | 2205 | Rejected-C05 |  |  |  |
 * | 2206 | Rejected-C06 |  |  |  |
 * | 2207 | Rejected-C07 |  |  |  |
 * | 2208 | Rejected-C08 |  |  |  |
 * | 2209 | Rejected-C09 |  |  |  |
 * | 2210 | Rejected-C10 |  |  |  |
 * | 2211 | Rejected-C11 |  |  |  |
 * | 2212 | Rejected-C12 |  |  |  |
 * | 2213 | Rejected-C13 |  |  |  |
 * | 2261 | Rejected-C61 |  |  |  |
 * | 2262 | Rejected-C62 |  |  |  |
 * | 2263 | Rejected-C63 |  |  |  |
 * | 2264 | Rejected-C64 |  |  |  |
 * | 2265 | Rejected-C65 |  |  |  |
 * | 2266 | Rejected-C66 |  |  |  |
 * | 2267 | Rejected-C67 |  |  |  |
 * | 2268 | Rejected-C68 |  |  |  |
 * | 2269 | Rejected-C69 |  |  |  |
 * | 2301 | Rejected-X01 |  | Misc Check 21 Return |  |
 * | 2304 | Rejected-X04 |  | Invalid Image |  |
 * | 2305 | Rejected-X05 | E95 | Breach of Warranty |  |
 * | 2306 | Rejected-X06 | E96 | Counterfeit / Forgery |  |
 * | 2307 | Rejected-X07 | E97 | Refer to Maker |  |
 * | 2308 | Rejected-X08 |  | Maximum Payment Attempts |  |
 * | 2309 | Rejected-X09 |  | Item Cannot be Re-presented |  |
 * | 2310 | Rejected-X10 |  | Not Our Item |  |
 * | 2321 | Rejected-X21 |  | Pay None |  |
 * | 2322 | Rejected-X22 |  | Pay All |  |
 * | 2323 | Rejected-X23 | E93 | Non-Negotiable |  |
 * | 2329 | Rejected-X29 |  | Stale Dated |  |
 * | 2345 | Rejected-X45 |  | Misc Return |  |
 * | 2371 | Rejected-X71 |  | RCK - 2nd Time |  |
 * | 2372 | Rejected-X72 |  | RCK Reject - ACH |  |
 * | 2373 | Rejected-X73 |  | RCK Reject - Payer |  |
 */
class ReasonCodeIdEnum
{
    public const ENUM_0 = 0;

    public const ENUM_1000 = 1000;

    public const ENUM_1001 = 1001;

    public const ENUM_1002 = 1002;

    public const ENUM_1003 = 1003;

    public const ENUM_1004 = 1004;

    public const ENUM_1005 = 1005;

    public const ENUM_1200 = 1200;

    public const ENUM_1201 = 1201;

    public const ENUM_1240 = 1240;

    public const ENUM_1301 = 1301;

    public const ENUM_1302 = 1302;

    public const ENUM_1303 = 1303;

    public const ENUM_1304 = 1304;

    public const ENUM_1305 = 1305;

    public const ENUM_1306 = 1306;

    public const ENUM_1307 = 1307;

    public const ENUM_1308 = 1308;

    public const ENUM_1309 = 1309;

    public const ENUM_1310 = 1310;

    public const ENUM_1311 = 1311;

    public const ENUM_1312 = 1312;

    public const ENUM_1313 = 1313;

    public const ENUM_1314 = 1314;

    public const ENUM_1315 = 1315;

    public const ENUM_1316 = 1316;

    public const ENUM_1317 = 1317;

    public const ENUM_1318 = 1318;

    public const ENUM_1319 = 1319;

    public const ENUM_1320 = 1320;

    public const ENUM_1321 = 1321;

    public const ENUM_1322 = 1322;

    public const ENUM_1323 = 1323;

    public const ENUM_1324 = 1324;

    public const ENUM_1325 = 1325;

    public const ENUM_1326 = 1326;

    public const ENUM_1327 = 1327;

    public const ENUM_1328 = 1328;

    public const ENUM_1329 = 1329;

    public const ENUM_1330 = 1330;

    public const ENUM_1331 = 1331;

    public const ENUM_1332 = 1332;

    public const ENUM_1333 = 1333;

    public const ENUM_1334 = 1334;

    public const ENUM_1335 = 1335;

    public const ENUM_1336 = 1336;

    public const ENUM_1337 = 1337;

    public const ENUM_1338 = 1338;

    public const ENUM_1339 = 1339;

    public const ENUM_1340 = 1340;

    public const ENUM_1341 = 1341;

    public const ENUM_1342 = 1342;

    public const ENUM_1343 = 1343;

    public const ENUM_1344 = 1344;

    public const ENUM_1345 = 1345;

    public const ENUM_1346 = 1346;

    public const ENUM_1347 = 1347;

    public const ENUM_1348 = 1348;

    public const ENUM_1349 = 1349;

    public const ENUM_1350 = 1350;

    public const ENUM_1351 = 1351;

    public const ENUM_1352 = 1352;

    public const ENUM_1353 = 1353;

    public const ENUM_1354 = 1354;

    public const ENUM_1355 = 1355;

    public const ENUM_1356 = 1356;

    public const ENUM_1357 = 1357;

    public const ENUM_1358 = 1358;

    public const ENUM_1359 = 1359;

    public const ENUM_1360 = 1360;

    public const ENUM_1361 = 1361;

    public const ENUM_1362 = 1362;

    public const ENUM_1363 = 1363;

    public const ENUM_1364 = 1364;

    public const ENUM_1365 = 1365;

    public const ENUM_1366 = 1366;

    public const ENUM_1367 = 1367;

    public const ENUM_1368 = 1368;

    public const ENUM_1369 = 1369;

    public const ENUM_1370 = 1370;

    public const ENUM_1371 = 1371;

    public const ENUM_1372 = 1372;

    public const ENUM_1373 = 1373;

    public const ENUM_1374 = 1374;

    public const ENUM_1375 = 1375;

    public const ENUM_1376 = 1376;

    public const ENUM_1377 = 1377;

    public const ENUM_1378 = 1378;

    public const ENUM_1379 = 1379;

    public const ENUM_1380 = 1380;

    public const ENUM_1381 = 1381;

    public const ENUM_1382 = 1382;

    public const ENUM_1383 = 1383;

    public const ENUM_1384 = 1384;

    public const ENUM_1385 = 1385;

    public const ENUM_1386 = 1386;

    public const ENUM_1387 = 1387;

    public const ENUM_1388 = 1388;

    public const ENUM_1389 = 1389;

    public const ENUM_1390 = 1390;

    public const ENUM_1391 = 1391;

    public const ENUM_1392 = 1392;

    public const ENUM_1393 = 1393;

    public const ENUM_1394 = 1394;

    public const ENUM_1395 = 1395;

    public const ENUM_1396 = 1396;

    public const ENUM_1397 = 1397;

    public const ENUM_1398 = 1398;

    public const ENUM_1399 = 1399;

    public const ENUM_1500 = 1500;

    public const ENUM_1510 = 1510;

    public const ENUM_1518 = 1518;

    public const ENUM_1520 = 1520;

    public const ENUM_1530 = 1530;

    public const ENUM_1531 = 1531;

    public const ENUM_1540 = 1540;

    public const ENUM_1541 = 1541;

    public const ENUM_1588 = 1588;

    public const ENUM_1599 = 1599;

    public const ENUM_1601 = 1601;

    public const ENUM_1602 = 1602;

    public const ENUM_1603 = 1603;

    public const ENUM_1604 = 1604;

    public const ENUM_1605 = 1605;

    public const ENUM_1606 = 1606;

    public const ENUM_1607 = 1607;

    public const ENUM_1608 = 1608;

    public const ENUM_1609 = 1609;

    public const ENUM_1610 = 1610;

    public const ENUM_1611 = 1611;

    public const ENUM_1612 = 1612;

    public const ENUM_1613 = 1613;

    public const ENUM_1614 = 1614;

    public const ENUM_1615 = 1615;

    public const ENUM_1616 = 1616;

    public const ENUM_1617 = 1617;

    public const ENUM_1618 = 1618;

    public const ENUM_1619 = 1619;

    public const ENUM_1620 = 1620;

    public const ENUM_1621 = 1621;

    public const ENUM_1622 = 1622;

    public const ENUM_1623 = 1623;

    public const ENUM_1624 = 1624;

    public const ENUM_1625 = 1625;

    public const ENUM_1626 = 1626;

    public const ENUM_1627 = 1627;

    public const ENUM_1628 = 1628;

    public const ENUM_1629 = 1629;

    public const ENUM_1630 = 1630;

    public const ENUM_1631 = 1631;

    public const ENUM_1632 = 1632;

    public const ENUM_1640 = 1640;

    public const ENUM_1641 = 1641;

    public const ENUM_1650 = 1650;

    public const ENUM_1651 = 1651;

    public const ENUM_1652 = 1652;

    public const ENUM_1653 = 1653;

    public const ENUM_1654 = 1654;

    public const ENUM_1655 = 1655;

    public const ENUM_1656 = 1656;

    public const ENUM_1657 = 1657;

    public const ENUM_1658 = 1658;

    public const ENUM_1659 = 1659;

    public const ENUM_1660 = 1660;

    public const ENUM_1661 = 1661;

    public const ENUM_1662 = 1662;

    public const ENUM_1663 = 1663;

    public const ENUM_1664 = 1664;

    public const ENUM_1665 = 1665;

    public const ENUM_1666 = 1666;

    public const ENUM_1667 = 1667;

    public const ENUM_1668 = 1668;

    public const ENUM_1701 = 1701;

    public const ENUM_1800 = 1800;

    public const ENUM_1801 = 1801;

    public const ENUM_1802 = 1802;

    public const ENUM_1803 = 1803;

    public const ENUM_1804 = 1804;

    public const ENUM_1805 = 1805;

    private const _ALL_VALUES = [
        self::ENUM_0,
        self::ENUM_1000,
        self::ENUM_1001,
        self::ENUM_1002,
        self::ENUM_1003,
        self::ENUM_1004,
        self::ENUM_1005,
        self::ENUM_1200,
        self::ENUM_1201,
        self::ENUM_1240,
        self::ENUM_1301,
        self::ENUM_1302,
        self::ENUM_1303,
        self::ENUM_1304,
        self::ENUM_1305,
        self::ENUM_1306,
        self::ENUM_1307,
        self::ENUM_1308,
        self::ENUM_1309,
        self::ENUM_1310,
        self::ENUM_1311,
        self::ENUM_1312,
        self::ENUM_1313,
        self::ENUM_1314,
        self::ENUM_1315,
        self::ENUM_1316,
        self::ENUM_1317,
        self::ENUM_1318,
        self::ENUM_1319,
        self::ENUM_1320,
        self::ENUM_1321,
        self::ENUM_1322,
        self::ENUM_1323,
        self::ENUM_1324,
        self::ENUM_1325,
        self::ENUM_1326,
        self::ENUM_1327,
        self::ENUM_1328,
        self::ENUM_1329,
        self::ENUM_1330,
        self::ENUM_1331,
        self::ENUM_1332,
        self::ENUM_1333,
        self::ENUM_1334,
        self::ENUM_1335,
        self::ENUM_1336,
        self::ENUM_1337,
        self::ENUM_1338,
        self::ENUM_1339,
        self::ENUM_1340,
        self::ENUM_1341,
        self::ENUM_1342,
        self::ENUM_1343,
        self::ENUM_1344,
        self::ENUM_1345,
        self::ENUM_1346,
        self::ENUM_1347,
        self::ENUM_1348,
        self::ENUM_1349,
        self::ENUM_1350,
        self::ENUM_1351,
        self::ENUM_1352,
        self::ENUM_1353,
        self::ENUM_1354,
        self::ENUM_1355,
        self::ENUM_1356,
        self::ENUM_1357,
        self::ENUM_1358,
        self::ENUM_1359,
        self::ENUM_1360,
        self::ENUM_1361,
        self::ENUM_1362,
        self::ENUM_1363,
        self::ENUM_1364,
        self::ENUM_1365,
        self::ENUM_1366,
        self::ENUM_1367,
        self::ENUM_1368,
        self::ENUM_1369,
        self::ENUM_1370,
        self::ENUM_1371,
        self::ENUM_1372,
        self::ENUM_1373,
        self::ENUM_1374,
        self::ENUM_1375,
        self::ENUM_1376,
        self::ENUM_1377,
        self::ENUM_1378,
        self::ENUM_1379,
        self::ENUM_1380,
        self::ENUM_1381,
        self::ENUM_1382,
        self::ENUM_1383,
        self::ENUM_1384,
        self::ENUM_1385,
        self::ENUM_1386,
        self::ENUM_1387,
        self::ENUM_1388,
        self::ENUM_1389,
        self::ENUM_1390,
        self::ENUM_1391,
        self::ENUM_1392,
        self::ENUM_1393,
        self::ENUM_1394,
        self::ENUM_1395,
        self::ENUM_1396,
        self::ENUM_1397,
        self::ENUM_1398,
        self::ENUM_1399,
        self::ENUM_1500,
        self::ENUM_1510,
        self::ENUM_1518,
        self::ENUM_1520,
        self::ENUM_1530,
        self::ENUM_1531,
        self::ENUM_1540,
        self::ENUM_1541,
        self::ENUM_1588,
        self::ENUM_1599,
        self::ENUM_1601,
        self::ENUM_1602,
        self::ENUM_1603,
        self::ENUM_1604,
        self::ENUM_1605,
        self::ENUM_1606,
        self::ENUM_1607,
        self::ENUM_1608,
        self::ENUM_1609,
        self::ENUM_1610,
        self::ENUM_1611,
        self::ENUM_1612,
        self::ENUM_1613,
        self::ENUM_1614,
        self::ENUM_1615,
        self::ENUM_1616,
        self::ENUM_1617,
        self::ENUM_1618,
        self::ENUM_1619,
        self::ENUM_1620,
        self::ENUM_1621,
        self::ENUM_1622,
        self::ENUM_1623,
        self::ENUM_1624,
        self::ENUM_1625,
        self::ENUM_1626,
        self::ENUM_1627,
        self::ENUM_1628,
        self::ENUM_1629,
        self::ENUM_1630,
        self::ENUM_1631,
        self::ENUM_1632,
        self::ENUM_1640,
        self::ENUM_1641,
        self::ENUM_1650,
        self::ENUM_1651,
        self::ENUM_1652,
        self::ENUM_1653,
        self::ENUM_1654,
        self::ENUM_1655,
        self::ENUM_1656,
        self::ENUM_1657,
        self::ENUM_1658,
        self::ENUM_1659,
        self::ENUM_1660,
        self::ENUM_1661,
        self::ENUM_1662,
        self::ENUM_1663,
        self::ENUM_1664,
        self::ENUM_1665,
        self::ENUM_1666,
        self::ENUM_1667,
        self::ENUM_1668,
        self::ENUM_1701,
        self::ENUM_1800,
        self::ENUM_1801,
        self::ENUM_1802,
        self::ENUM_1803,
        self::ENUM_1804,
        self::ENUM_1805
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|int $value Value or a list/map of values to be checked
     *
     * @return array|null|int Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for ReasonCodeIdEnum.");
    }
}
