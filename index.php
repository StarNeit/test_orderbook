<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/bootstrap@3.3.7(css/bootstrap.min.css)">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
<div class="sidebar">
    <div class="sidebar__avatar__box">
        <img src="images/sidebar/avatar.png" class="sidebar__avatar"/>
        <div class="sidebar__avatar__badge">99+</div>
    </div>

    <div class="sidebar__ico">
        <img src="images/sidebar/icon_ico.png" class="sidebar__ico"/>
        <div class="sidebar__label">
            ICO
        </div>
    </div>

    <div class="sidebar__ico">
        <img src="images/sidebar/icon_chart.png" class="sidebar__ico"/>
        <div class="sidebar__label">
            Charts
        </div>
    </div>

    <div class="sidebar__ico">
        <img src="images/sidebar/icon_stats.png" class="sidebar__ico"/>
        <div class="sidebar__label">
            Stats
        </div>
    </div>

    <div class="sidebar__ico">
        <img src="images/sidebar/icon_trading.png" class="sidebar__ico"/>
        <div class="sidebar__label">
            Trading
        </div>
    </div>

    <div class="sidebar__ico">
        <img src="images/sidebar/icon_news.png" class="sidebar__ico"/>
        <div class="sidebar__label">
            News
        </div>
    </div>

    <div class="sidebar__ico">
        <img src="images/sidebar/icon_other.png" class="sidebar__ico"/>
        <div class="sidebar__label">
            Other
        </div>
    </div>

    <div class="sidebar__ico">
        <img src="images/sidebar/icon_refresh.png" class="sidebar__refresh"/>
    </div>

    <div class="bottom_controls">
        <img src="images/sidebar/b_icon_windows.png" class="bottom_controls__icon"/>
        <img src="images/sidebar/b_icon_plus.png" class="bottom_controls__icon"/>
        <img src="images/sidebar/b_icon_alarm.png" class="bottom_controls__icon"/>
        <img src="images/sidebar/b_icon_info.png" class="bottom_controls__icon"/>
        <img src="images/sidebar/b_icon_ex.png" class="bottom_controls__icon"/>
        <img src="images/sidebar/b_icon_user.png" class="bottom_controls__icon"/>
        <img src="images/sidebar/b_icon_setting.png" class="bottom_controls__icon"/>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-6 pd-sm-1">
                <div class="global_ob_container">
                    <div class="global_ob_container__lgtitle">
                        Filled Order Transparency
                    </div>
                    <div class="global_ob__table">
                        <div class="global_ob__table__header">
                            <div>
                                Price <span>(USDT)</span>
                            </div>
                            <div>
                                Amt. <span>(ETH)</span>
                            </div>
                            <div>
                                Regional Ex.
                            </div>
                        </div>
                        <div class="global_ob__table__content">
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072419</div>
                                <div>3.131000</div>
                                <div>BITFINEX</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072405</div>
                                <div>1.000000</div>
                                <div>COINBASE</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072484</div>
                                <div>0.276000</div>
                                <div>BITFINEX</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072396</div>
                                <div>2.162000</div>
                                <div>KRAKEN</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072388</div>
                                <div>0.023000</div>
                                <div>BITFINEX</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072388</div>
                                <div>0.080000</div>
                                <div>BINANCE</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072377</div>
                                <div>0.065000</div>
                                <div>YDBIC</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072366</div>
                                <div>0.805000</div>
                                <div>BITFINEX</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072365</div>
                                <div>1.200000</div>
                                <div>COINBASE</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072388</div>
                                <div>0.023000</div>
                                <div>BITFINEX</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="red-highlight">0.072388</div>
                                <div>0.080000</div>
                                <div>BINANCE</div>
                            </div>

                            <div class="flex spread">
                                480.247523 USDT
                            </div>

                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072419</div>
                                <div>3.131000</div>
                                <div>BITFINEX</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072405</div>
                                <div>1.000000</div>
                                <div>COINBASE</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072484</div>
                                <div>0.276000</div>
                                <div>BITFINEX</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072396</div>
                                <div>2.162000</div>
                                <div>KRAKEN</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072388</div>
                                <div>0.023000</div>
                                <div>BITFINEX</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072388</div>
                                <div>0.080000</div>
                                <div>BINANCE</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072377</div>
                                <div>0.065000</div>
                                <div>YDBIC</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072366</div>
                                <div>0.805000</div>
                                <div>BITFINEX</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072365</div>
                                <div>1.200000</div>
                                <div>COINBASE</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072388</div>
                                <div>0.023000</div>
                                <div>BITFINEX</div>
                            </div>
                            <div class="global_ob__table__row">
                                <div class="blue-highlight">0.072388</div>
                                <div>0.080000</div>
                                <div>BINANCE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pd-sm-2">
                <div class="realtime_qf_container">
                    <div class="realtime_qf_container__lgtitle">
                        RealTime Quote Feed
                    </div>
                    <div class="global_ob__table">
                        <div class="global_ob__table__header realtime">
                            <div>
                                Price <span>(USDT)</span>
                            </div>
                            <div>
                                Amt. <span>(ETH)</span>
                            </div>
                            <div>
                                Regional Ex.
                            </div>
                        </div>
                        <div class="global_ob__table__content__box">
                            <div class="global_ob__table__content">
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072419</div>
                                    <div>3.131000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072405</div>
                                    <div>1.000000</div>
                                    <div>COINBASE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072484</div>
                                    <div>0.276000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072396</div>
                                    <div>2.162000</div>
                                    <div>KRAKEN</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.023000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.080000</div>
                                    <div>BINANCE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072377</div>
                                    <div>0.065000</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072365</div>
                                    <div>1.200000</div>
                                    <div>COINBASE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.023000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072388</div>
                                    <div>0.080000</div>
                                    <div>BINANCE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072377</div>
                                    <div>0.065000</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072365</div>
                                    <div>2.162000</div>
                                    <div>KRAKEN</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072419</div>
                                    <div>3.131000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072405</div>
                                    <div>1.000000</div>
                                    <div>COINBASE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072484</div>
                                    <div>0.276000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072396</div>
                                    <div>2.162000</div>
                                    <div>KRAKEN</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072388</div>
                                    <div>0.023000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072388</div>
                                    <div>0.080000</div>
                                    <div>BINANCE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072377</div>
                                    <div>0.065000</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072365</div>
                                    <div>1.200000</div>
                                    <div>COINBASE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.023000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.080000</div>
                                    <div>BINANCE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072377</div>
                                    <div>0.065000</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.080000</div>
                                    <div>BINANCE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072377</div>
                                    <div>0.065000</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072419</div>
                                    <div>3.131000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072405</div>
                                    <div>1.000000</div>
                                    <div>COINBASE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072484</div>
                                    <div>0.276000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072396</div>
                                    <div>2.162000</div>
                                    <div>KRAKEN</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.023000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.080000</div>
                                    <div>BINANCE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072377</div>
                                    <div>0.065000</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072365</div>
                                    <div>1.200000</div>
                                    <div>COINBASE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.023000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072388</div>
                                    <div>0.080000</div>
                                    <div>BINANCE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072377</div>
                                    <div>0.065000</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072365</div>
                                    <div>2.162000</div>
                                    <div>KRAKEN</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072419</div>
                                    <div>3.131000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072405</div>
                                    <div>1.000000</div>
                                    <div>COINBASE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072484</div>
                                    <div>0.276000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072396</div>
                                    <div>2.162000</div>
                                    <div>KRAKEN</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072388</div>
                                    <div>0.023000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072388</div>
                                    <div>0.080000</div>
                                    <div>BINANCE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072377</div>
                                    <div>0.065000</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072365</div>
                                    <div>1.200000</div>
                                    <div>COINBASE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.023000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.080000</div>
                                    <div>BINANCE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072377</div>
                                    <div>0.065000</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072388</div>
                                    <div>0.080000</div>
                                    <div>BINANCE</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072377</div>
                                    <div>0.065000</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="red-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805000</div>
                                    <div>BITFINEX</div>
                                </div>
                                <div class="global_ob__table__row">
                                    <div class="blue-highlight">0.072366</div>
                                    <div>0.805130</div>
                                    <div>YDBIC</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="orders_container">
            <div class="orders_container__header">
                <div class="flex">
                    <div class="flex-sm-1">
                        <div class="orders_container__lgtitle">
                            Orders
                        </div>
                    </div>
                    <div class="orders_menu">
                        <div class="flex">
                            <div class="flex-sm-1 tab">
                                Market
                            </div>
                            <div class="flex-sm-1 tab active">
                                Limit
                            </div>
                            <div class="flex-sm-1 tab">
                                Stop
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="orders_container__content">
                <div class="row">
                    <div class="col-sm-6 orders_item__border">
                        <div class="orders_item">
                            <div class="orders_item__label">
                                Amount
                            </div>
                            <div class="orders_item__value">
                                <input type="number" class="" placeholder="0.000000">
                                <div>ETH</div>
                            </div>
                        </div>

                        <div class="orders_item">
                            <div class="orders_item__label">
                                Price limit
                            </div>
                            <div class="orders_item__value">
                                <input type="number" class="" placeholder="0.000000">
                                <div>USDT</div>
                            </div>
                        </div>

                        <div class="orders_item">
                            <div class="orders_item__label">
                                Total
                            </div>
                            <div class="orders_item__value">
                                <input type="number" class="" placeholder="0.000000">
                                <div>USDT</div>
                            </div>
                        </div>

                        <div class="slider-container">
                            <div class="slider-steps">
                                <div class="slider-step"></div>
                                <div class="slider-step"></div>
                                <div class="slider-step"></div>
                                <div class="slider-step"></div>
                            </div>
                            <div class="slider-line"></div>
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </div>

                        <button type="button" class="btn_buy_eth">BUY ETH</button>
                    </div>
                    <div class="col-sm-6">
                        <div class="orders_item">
                            <div class="orders_item__label">
                                Amount
                            </div>
                            <div class="orders_item__value">
                                <input type="number" class="" placeholder="0.000000">
                                <div>ETH</div>
                            </div>
                        </div>

                        <div class="orders_item">
                            <div class="orders_item__label">
                                Price limit
                            </div>
                            <div class="orders_item__value">
                                <input type="number" class="" placeholder="0.000000">
                                <div>USDT</div>
                            </div>
                        </div>

                        <div class="orders_item">
                            <div class="orders_item__label">
                                Total
                            </div>
                            <div class="orders_item__value">
                                <input type="number" class="" placeholder="0.000000">
                                <div>USDT</div>
                            </div>
                        </div>

                        <div class="slider-container">
                            <div class="slider-steps">
                                <div class="slider-step"></div>
                                <div class="slider-step"></div>
                                <div class="slider-step"></div>
                                <div class="slider-step"></div>
                            </div>
                            <div class="slider-line"></div>
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </div>

                        <button type="button" class="btn_sell_eth">SELL ETH</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-4">
                <div class="exchange_header__droplist">
                    <div class="exchange_header__droplist__input">
                        <div class="exchange_header__droplist__input__note">You Get</div>
                        <div class="exchange_header__droplist__input__value">208154.00</div>
                    </div>
                    <div class="exchange_header__droplist__coin">
                        <img src="images/header/coin_eth.png"/>
                        <div>ETH</div>
                        <i class="fas fa-caret-down"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="exchange_header__title">
                    <div><img src="images/header/head_arrow.png"/></div>
                    <div class="exchange_header__title__label">CLICK TO EXCHANGE</div>
                    <div><img src="images/header/head_arrow.png"/></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="exchange_header__droplist">
                    <div class="exchange_header__droplist__input">
                        <div class="exchange_header__droplist__input__note">You Send</div>
                        <div class="exchange_header__droplist__input__value">1000.00</div>
                    </div>
                    <div class="exchange_header__droplist__coin">
                        <img src="images/header/price_usdt.png"/>
                        <div>USDT</div>
                        <i class="fas fa-caret-down"></i>
                    </div>
                </div>
            </div>
        </div>

        <!--Graph-->
        <div class="graph_tool">
            <div class="graph_tool__maintools">
                <div class="graph_tool__maintools__item">
                    <img src="images/graph/icon_2.png"/>
                </div>
                <div class="graph_tool__maintools__item">
                    <img src="images/graph/icon_3.png"/>
                </div>
                <div class="graph_tool__maintools__item">
                    <img src="images/graph/icon_4.png"/>
                </div>
                <div class="graph_tool__maintools__item">
                    <img src="images/graph/icon_5.png"/>
                </div>
                <div class="graph_tool__maintools__item">
                    <img src="images/graph/icon_6.png"/>
                </div>
                <div class="graph_tool__maintools__item">
                    <img src="images/graph/icon_7.png"/>
                </div>
                <div class="graph_tool__maintools__item">
                    Indicators
                </div>
                <div class="graph_tool__maintools__item">
                    Algos
                </div>
                <div class="graph_tool__maintools__item">
                    MacD
                </div>
                <div class="graph_tool__maintools__item">
                    <img src="images/graph/icon_1.png"/>
                </div>
            </div>
        </div>


        <!--Account-->
        <div class="account_group">

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/g/jquery@3.1.1,bootstrap@3.3.7"></script>
<script src="scripts/script.js"></script>
</body>
</html>