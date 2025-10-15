<script>
    
    function updateSoccer(res){
        let html = ``;
        
        data = JSON.parse(res.data);
        console.log(res.sport, 'data-----',data);
        $(data).each(function(){

            html += soccer(this);
        });
        $(`.${res.sport}`).html(html);
    }

    // Sport Page js start

        function soccer(data){
            let eventPage = "{{url('soccerEvent')}}";
            let c_time = (new Date()).getTime();
            let html = ``;
            if((new Date()).getTime() < (new Date(data.stime)).getTime()) {
                eventPage = "{{url('soccerUpcomingEvent')}}";
            }
            html += `
                <tr data-gmid='${data.gmid}' data-mid='${data.mid}' data-ename="${data.ename}" data-stime="${data.stime}">
                    <!-- Football -->
                    <td class="text-start px-3">
                        <div class="match-layout">
                            <!-- Left Side: Date & Time -->
                            <span class="match-status today">${data.stime}</small></span>

                            <!-- Right Side: Teams -->
                            <a href="javascript:void(0)" data-href="${eventPage}/${data.gmid}" class="right-side eventPage">
                                ${data.ename}
                            </a>
                        </div>
                    </td>
                    <td>
                        <a class="odd-btn ${data.section[0][0].oname}">${data.section[0][0].odds}</a>
                        <a class="odd-btn lay ${data.section[0][1].oname}">${data.section[0][1].odds}</a>
                    </td>
                    <td>
                        <a class="odd-btn ${data.section[2][0].oname}">${data.section[2][0].odds}</a>
                        <a class="odd-btn lay ${data.section[2][1].oname}">${data.section[2][1].odds}</a>
                    </td>
                    <td>
                        <a class="odd-btn ${data.section[1][0].oname}">${data.section[1][0].odds}</a>
                        <a class="odd-btn lay ${data.section[1][1].oname}">${data.section[1][1].odds}</a>
                    </td>
                </tr>
            `;

            return html;
        }

        // $('body').on('click','.eventPage', function(){
        //     let url = $(this).attr('data-href');
        //     let tr = $(this).parents('tr');
        //     let data = {};
        //     data['gameId'] = $(tr).attr('data-gameId');
        //     data['eventName'] = $(tr).attr('data-eventName');
        //     data['eventDate'] = $(tr).attr('data-eventDate');
        //     console.log('data---',data);
            
        //     callApi('get',url,data);
        // });

    // sport page js end

    // event page js start

        let eventPageLoading = false;
        function updateSoccerEvent(res){

            res = res.response;
            res = JSON.parse(res);
            data = res.data;
            console.log('log update soccer--',data);
            
            
            $(data).each(function(i,j){
                if(!eventPageLoading) {
                    if(i == data.length-1) {
                        eventPageLoading = true;
                    }
                    createMarketDiv(this);
                } else {
                    updateMarket(this);
                } 
                
            });
        }


        function createMarketDiv(data){
            
            let html = '';
            
            html += `
                <!-- ${data.mname} -->
                <table id="market_${data.mid}" class="table text-center mb-0 align-middle odds-table my-2">
                    <thead class="table-light">
                        <tr>
                            <th style="">${data.mname}</th>
                            <th style=""></th>
                        </tr>
                    </thead>
                    <tbody class="data_market_${data.mid}">`;

                    $(data.section).each(function(i,j){

                        html +=`
                            <tr class="m_row${i}">
                                <!-- ${this.nat} -->
                                <td class="text-start px-3">
                                    <div class="match-layout">
                                        <div class="right-side">
                                            <div class="match_nat${i}">${this.nat}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                            `;

                            $(this.odds).each(function(i,j){
                                html +=`
                                    <a class="odd-btn ${j.otype} ${j.oname}">${j.odds}</a>
                                `;
                            });

                    html +=`
                                </td>
                            </tr>
                        `;
                    })
                
                html +=`
                    </tbody>
                </table>
            `;

            $('.soccerData').append(html);
        }

        function updateMarket(data){

            let m_div = $(`#market_${data.mid}`);

            let section = data.section;
            
            $(section).each(function(i,j){
                
                $(m_div).find(`.match_nat${i}`).html(j.nat);
                
                $(j.odds).each(function(){
                    let odd = $(m_div).find(`.m_row${i}`).find(`.${this.oname}`);
                    if($(odd).html() != this.odds){
                        $(this).addClass('odd_change');
                        setTimeout(() => {
                            $(this).removeClass('odd_change');
                        }, 300);
                    }
                    $(odd).html(this.odds);
                });
            });


        }

    // event page js start
    
</script>