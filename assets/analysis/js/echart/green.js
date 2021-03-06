var theme = {

                    color: [
                        '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
                        '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
                    ],

                    title: {
                        itemGap: 8,
                        textStyle: {
                            fontWeight: 'normal',
                            color: '#fff'
                        }
                    },

                   
                    categoryAxis: {
                        axisLine: {
                            lineStyle: {
                                color: '#408829'
                            }
						
                        },
						
                        splitLine: {
                            lineStyle: {
                                color: ['#242831']
                            }
                        }
                    },

                    valueAxis: {
                        axisLine: {
                            lineStyle: {
                                color: '#408829'
                            }
                        },
                        splitArea: {
                            show: true,
                            areaStyle: {
                                color: ['rgba(250,250,250,0)', 'rgba(200,200,200,0)']
                            }
                        },
                        splitLine: {
                            lineStyle: {
                                color: ['#242831']
                            }
                        }
						
						
                    },
                    timeline: {
                        lineStyle: {
                            color: '#408829'
                        },
                        controlStyle: {
                            normal: {color: '#408829'},
                            emphasis: {color: '#408829'}
                        }
                    },

                    k: {
                        itemStyle: {
                            normal: {
                                color: '#68a54a',
                                color0: '#a9cba2',
                                lineStyle: {
                                    width: 1,
                                    color: '#408829',
                                    color0: '#86b379'
                                }
                            }
                        }
                    },
                    map: {
                        itemStyle: {
                            normal: {
                                areaStyle: {
                                    color: '#ddd'
                                },
                                label: {
                                    textStyle: {
                                        color: '#c12e34'
                                    }
                                }
                            },
                            emphasis: {
                                areaStyle: {
                                    color: '#99d2dd'
                                },
                                label: {
                                    textStyle: {
                                        color: '#c12e34'
                                    }
                                }
                            }
                        }
                    },
                    force: {
                        itemStyle: {
                            normal: {
                                linkStyle: {
                                    strokeColor: '#408829'
                                }
                            }
                        }
                    },
                    chord: {
                        padding: 4,
                        itemStyle: {
                            normal: {
                                lineStyle: {
                                    width: 1,
                                    color: 'rgba(128, 128, 128, 0.5)'
                                },
                                chordStyle: {
                                    lineStyle: {
                                        width: 1,
                                        color: 'rgba(128, 128, 128, 0.5)'
                                    }
                                }
                            },
                            emphasis: {
                                lineStyle: {
                                    width: 1,
                                    color: 'rgba(128, 128, 128, 0.5)'
                                },
                                chordStyle: {
                                    lineStyle: {
                                        width: 1,
                                        color: 'rgba(128, 128, 128, 0.5)'
                                    }
                                }
                            }
                        }
                    },
                    gauge: {
                        startAngle: 225,
                        endAngle: -45,
                        axisLine: {
                            show: true,
                            lineStyle: {
                                color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                                width: 8
                            }
                        },
                        axisTick: {
                            splitNumber: 10,
                            length: 12,
                            lineStyle: {
                                color: 'auto'
                            }
                        },
                        axisLabel: {
                            textStyle: {
                                color: 'auto'
                            }
                        },
                        splitLine: {
                            length: 18,
                            lineStyle: {
                                color: 'auto'
                            }
                        },
                        pointer: {
                            length: '90%',
                            color: 'auto'
                        },
                        title: {
                            textStyle: {
                                color: '#fff'
                            }
                        },
                        detail: {
                            textStyle: {
                                color: '#fff'
                            }
                        }
                    },
                    textStyle: {
                        fontFamily: 'Arial, Verdana, sans-serif',
						color:'#fff'								
                    }
                }
