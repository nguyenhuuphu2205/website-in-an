<nav id="sidebar">
          <div class="p-4 pt-5">
            <h5>DANH MỤC</h5>
            <ul class="list-unstyled components mb-5">
                @foreach($danhmuccha as $danhmuc)
                @if(count($danhmuc->danhMucCon)>0)
                <li>
                <a href="#danhmuc-{{$danhmuc->id}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">{{$danhmuc->ten}}</a>
                    
                <ul class="collapse list-unstyled" id="danhmuc-{{$danhmuc->id}}">
                    <li><a href="danh-muc/{{$danhmuc->id}}"><span class="fa fa-chevron-right mr-2"></span>Tất cả</a></li>
                    @foreach($danhmuc->danhMucCon as $dm)
                    <li><a href="danh-muc/{{$dm->id}}"><span class="fa fa-chevron-right mr-2"></span> {{$dm->ten}}</a></li>
                    @endforeach
                </ul>
              
              </li>
              @else
            <li><a href="danh-muc/{{$danhmuc->id}}"><span class="fa fa-chevron-right"></span> {{$danhmuc->ten}}</a></li>
              @endif
              @endforeach
            

            </ul>
            <div class="mb-5">
              <h5>Tag </h5>
              <div class="tagcloud">
                <a  class="tag-cloud-link text-dark">Máy in</a>
                <a class="tag-cloud-link  text-dark">In ấn</a>
                <a  class="tag-cloud-link  text-dark">In gia công</a>
                <a class="tag-cloud-link  text-dark">Vật tư in</a>
                <a  class="tag-cloud-link  text-dark">Thiết bị in</a>
                
              </div>
            </div>
          
          </div>
        </nav>