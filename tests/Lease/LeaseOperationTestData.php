<?php

namespace SlaveMarket\Lease;

class LeaseOperationTestData
{
    public function getTestData() {
        return [
            [
                'masterId' => 2,
                'slaveId' => 1,
                'timeFrom' => '2017-01-01 01:30:00',
                'timeTo' => '2017-01-01 02:01:00',
                'expectedErrors' => [
                    'Ошибка. Раб #1 "Уродливый Фред" занят. Занятые часы: "2017-01-01 01", "2017-01-01 02"',
                ],
                'expectedContract' => [],
            ],
            [
                'masterId' => 1,
                'slaveId' => 1,
                'timeFrom' => '2018-01-01 01:30:00',
                'timeTo' => '2018-01-01 02:01:00',
                'expectedErrors' => [],
                'expectedContract' => [
                    'masterId' => 1,
                    'slaveId' => 1,
                    'price' => 40,
                    'leasedHours' => [
                        '2018-01-01 01',
                        '2018-01-01 02',
                    ],
                ],
            ],
            [
                'masterId' => 3,
                'slaveId' => 1,
                'timeFrom' => '2018-01-01 01:30:00',
                'timeTo' => '2018-01-01 02:01:00',
                'expectedErrors' => [
                    'Ошибка. Мастер не найден',
                ],
                'expectedContract' => [],
            ],
            [
                'masterId' => 1,
                'slaveId' => 3,
                'timeFrom' => '2018-01-01 01:30:00',
                'timeTo' => '2018-01-01 02:01:00',
                'expectedErrors' => [
                    'Ошибка. Раб не найден',
                ],
                'expectedContract' => [],
            ],
            [
                'masterId' => 1,
                'slaveId' => 1,
                'timeFrom' => '',
                'timeTo' => '2018-01-01 02:01:00',
                'expectedErrors' => [
                    'Ошибка. Дата начала имеет неверный формат',
                ],
                'expectedContract' => [],
            ],
            [
                'masterId' => 1,
                'slaveId' => 1,
                'timeFrom' => '2018-01-01 01:30:00',
                'timeTo' => '',
                'expectedErrors' => [
                    'Ошибка. Дата конца имеет неверный формат',
                ],
                'expectedContract' => [],
            ],
            [
                'masterId' => 1,
                'slaveId' => 1,
                'timeFrom' => '2018-01-01 02:01:00',
                'timeTo' => '2018-01-01 01:30:00',
                'expectedErrors' => [
                    'Ошибка. Дата конца меньше даты начала',
                ],
                'expectedContract' => [],
            ],
            [
                'masterId' => 3,
                'slaveId' => 3,
                'timeFrom' => '',
                'timeTo' => '',
                'expectedErrors' => [
                    'Ошибка. Мастер не найден',
                    'Ошибка. Раб не найден',
                    'Ошибка. Дата начала имеет неверный формат',
                    'Ошибка. Дата конца имеет неверный формат',
                ],
                'expectedContract' => [],
            ],
            [
                'masterId' => 1,
                'slaveId' => 1,
                'timeFrom' => '2018-01-01 01:30:00',
                'timeTo' => '2018-01-01 17:30:00',
                'expectedErrors' => [
                    'Ошибка. Указано более 16 часов',
                ],
                'expectedContract' => [],
            ],
            [
                'masterId' => 1,
                'slaveId' => 1,
                'timeFrom' => '2018-01-01 01:30:00',
                'timeTo' => '2018-01-01 17:00:00',
                'expectedErrors' => [],
                'expectedContract' => [
                    'masterId' => 1,
                    'slaveId' => 1,
                    'price' => 320,
                    'leasedHours' => [
                        '2018-01-01 01',
                        '2018-01-01 02',
                        '2018-01-01 03',
                        '2018-01-01 04',
                        '2018-01-01 05',
                        '2018-01-01 06',
                        '2018-01-01 07',
                        '2018-01-01 08',
                        '2018-01-01 09',
                        '2018-01-01 10',
                        '2018-01-01 11',
                        '2018-01-01 12',
                        '2018-01-01 13',
                        '2018-01-01 14',
                        '2018-01-01 15',
                        '2018-01-01 16',
                    ],
                ],
            ],
            [
                'masterId' => 1,
                'slaveId' => 1,
                'timeFrom' => '2018-01-01 01:30:00',
                'timeTo' => '2018-01-02 22:00:00',
                'expectedErrors' => [],
                'expectedContract' => [
                    'masterId' => 1,
                    'slaveId' => 1,
                    'price' => 640,
                    'leasedHours' => [
                        '2018-01-01 00',
                        '2018-01-01 01',
                        '2018-01-01 02',
                        '2018-01-01 03',
                        '2018-01-01 04',
                        '2018-01-01 05',
                        '2018-01-01 06',
                        '2018-01-01 07',
                        '2018-01-01 08',
                        '2018-01-01 09',
                        '2018-01-01 10',
                        '2018-01-01 11',
                        '2018-01-01 12',
                        '2018-01-01 13',
                        '2018-01-01 14',
                        '2018-01-01 15',
                        '2018-01-01 16',
                        '2018-01-01 17',
                        '2018-01-01 18',
                        '2018-01-01 19',
                        '2018-01-01 20',
                        '2018-01-01 21',
                        '2018-01-01 22',
                        '2018-01-01 23',
                        '2018-01-02 00',
                        '2018-01-02 01',
                        '2018-01-02 02',
                        '2018-01-02 03',
                        '2018-01-02 04',
                        '2018-01-02 05',
                        '2018-01-02 06',
                        '2018-01-02 07',
                        '2018-01-02 08',
                        '2018-01-02 09',
                        '2018-01-02 10',
                        '2018-01-02 11',
                        '2018-01-02 12',
                        '2018-01-02 13',
                        '2018-01-02 14',
                        '2018-01-02 15',
                        '2018-01-02 16',
                        '2018-01-02 17',
                        '2018-01-02 18',
                        '2018-01-02 19',
                        '2018-01-02 20',
                        '2018-01-02 21',
                        '2018-01-02 22',
                        '2018-01-02 23',
                    ],
                ],
            ],
            [
                'masterId' => 1,
                'slaveId' => 1,
                'timeFrom' => '2018-01-01 11:30:00',
                'timeTo' => '2018-01-02 00:00:00',
                'expectedErrors' => [],
                'expectedContract' => [
                    'masterId' => 1,
                    'slaveId' => 1,
                    'price' => 260,
                    'leasedHours' => [
                        '2018-01-01 11',
                        '2018-01-01 12',
                        '2018-01-01 13',
                        '2018-01-01 14',
                        '2018-01-01 15',
                        '2018-01-01 16',
                        '2018-01-01 17',
                        '2018-01-01 18',
                        '2018-01-01 19',
                        '2018-01-01 20',
                        '2018-01-01 21',
                        '2018-01-01 22',
                        '2018-01-01 23',
                    ],
                ],
            ],
            [
                'masterId' => 1,
                'slaveId' => 1,
                'timeFrom' => '2018-01-01 11:30:00',
                'timeTo' => '2018-01-02 00:00:01',
                'expectedErrors' => [],
                'expectedContract' => [
                    'masterId' => 1,
                    'slaveId' => 1,
                    'price' => 640,
                    'leasedHours' => [
                        '2018-01-01 00',
                        '2018-01-01 01',
                        '2018-01-01 02',
                        '2018-01-01 03',
                        '2018-01-01 04',
                        '2018-01-01 05',
                        '2018-01-01 06',
                        '2018-01-01 07',
                        '2018-01-01 08',
                        '2018-01-01 09',
                        '2018-01-01 10',
                        '2018-01-01 11',
                        '2018-01-01 12',
                        '2018-01-01 13',
                        '2018-01-01 14',
                        '2018-01-01 15',
                        '2018-01-01 16',
                        '2018-01-01 17',
                        '2018-01-01 18',
                        '2018-01-01 19',
                        '2018-01-01 20',
                        '2018-01-01 21',
                        '2018-01-01 22',
                        '2018-01-01 23',
                        '2018-01-02 00',
                        '2018-01-02 01',
                        '2018-01-02 02',
                        '2018-01-02 03',
                        '2018-01-02 04',
                        '2018-01-02 05',
                        '2018-01-02 06',
                        '2018-01-02 07',
                        '2018-01-02 08',
                        '2018-01-02 09',
                        '2018-01-02 10',
                        '2018-01-02 11',
                        '2018-01-02 12',
                        '2018-01-02 13',
                        '2018-01-02 14',
                        '2018-01-02 15',
                        '2018-01-02 16',
                        '2018-01-02 17',
                        '2018-01-02 18',
                        '2018-01-02 19',
                        '2018-01-02 20',
                        '2018-01-02 21',
                        '2018-01-02 22',
                        '2018-01-02 23',
                    ],
                ],
            ],
        ];
    }
}