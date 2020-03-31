@extends('layouts.app')

@section('navbar')
<div
  class="modal fade"
  id="book"
  tabindex="-1"
  role="dialog"
  aria-labelledby="BookTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="BookTitle">Ном</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Номыг хуудасны тооноос нь хамааран 5-48 хуудастайг товхимол, 48-аас их
        хуудастайг ном гэж ангилдаг мөн хавтасны төрлөөр нь хатуу, зөөлөн гэж
        ангилдаг.
        <li class="font-weight-bold">Хэмжээ:</li>
        <p>
          Стандартын А6, А5, А4, A3, В6, В5, В4 болон стандарт бус ямар ч
          хэмжээтэй байх боломжтой.
          <br />А6 (105x148) <br />А5 (148x210) <br />А4 (210x297) <br />А3
          (297x420) <br />B6 (125x176) <br />B5 (176x250) <br />B4 (250x353)
        </p>
        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          60, 70, 80, 90, 100, 105, 128, 157, 200 гр/м2 нягтралтай хөнгөн шар,
          гөлгөр шар, цагаан (офсет), шохойтой, матт гэх цаасан дээр хийнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Дотор хэвлэлийг 1+1 (хар), 2+2 (нэмэлт нэг өнгөтэй), 4+4 (өнгөт), 5+5
          (үндсэн 4 өнгө, нэмэлт нэг өнгөтэй) өнгөтэй, хавтас нь дээрх өнгөний
          хослолуудаар хийж гүйцэтгэх боломжтой.
        </p>
        <li class="font-weight-bold">Хавтасны төрөл:</li>
        <p>
          Сэтгүүлийн хавтсыг 200, 250, 300 гр/м2 цаасаар хавтаслах боломжтой.
        </p>
        <li class="font-weight-bold">Бэхэлгээний төрөл:</li>
        <p>
          Бэхэлгээ нь наалт (70-аас дээш нүүртэй энгийн болон супер хавтастай),
          унаа үдээ (70 хүртэл нүүртэй ном), оёо (70 хүртэл нүүртэй номыг шулуун
          оёогоор, 70-аас дээш нүүртэй номыг өндөрлөгөө оёогоор бэхэлнэ),
          спираль гэх мэт байна.
        </p>
        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Бүх төрлийн хавтсанд ороолт хавтас, клише (алтлаг, мөнгөлөг зэрэг
          төрөл бүрийн өнгөөр), эмбосс (товойлгох), хуурай даралт (хонхойлгох),
          гялгар, барзгар лак, лазер зүсэлт гэх мэт нэмэлт чимэглэлүүд хийснээр
          таны хэвлүүлсэн бүтээгдэхүүн улам тансаг, үнэ цэнэтэй болно.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Сэтгүүлийн тоо ширхэг болон бэхэлгээний төрлөөс хамааран бэлэн болох
          хугацааг тодорхойлно. Үүнд:
          <br />Цавуун бэхэлгээ: 1-3 өдөр <br />Үдээн бэхэлгээ: 1-3 өдөр
          <br />Спиралин бэхэлгээ: 2-4 өдөр
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Сэтгүүл -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="setguul"
  tabindex="-1"
  role="dialog"
  aria-labelledby="setguulTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="setguulTitle">Сэтгүүл</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Бид бүх төрлийн сэтгүүлийг таны хүссэн загвар дизайнаар 5С UV лак,
        саатай, матт, гялгар бүрэлт, лазер зүсэлт, нэмэлт пантоне өнгө зэрэг
        орчин үеийн технологиор үйлдвэрлэж байна.
        <li class="font-weight-bold">Хэмжээ:</li>
        <p>
          Стандартын А5, А4, В5 болон стандарт бус ямар ч хэмжээтэй байх
          боломжтой.
          <br />А5 (148x210) <br />А4 (210x297)<br />B5 (176x250)
        </p>
        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          80, 90, 100, 105, 128, 157, 200 гр/м2 нягтралтай цагаан (офсет),
          шохойтой, матт цаасан дээр дотор хэвлэлтийг хийнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Дотор хэвлэлийг 1+1 (хар), 2+2 (нэмэлт нэг өнгөтэй), 4+4 (өнгөт), 5+5
          (үндсэн 4 өнгө, нэмэлт нэг өнгөтэй) өнгөтэй, хавтас нь дээрх өнгөний
          хослолуудаар хийж гүйцэтгэх боломжтой.
        </p>
        <li class="font-weight-bold">Хавтасны төрөл:</li>
        <p>
          Номын хавтсыг 200, 250, 300 гр/м2 цаасан хэвлэлт болон тусгай даавуу,
          лидерин зэрэг материалуудаар бүрж хавтаслах боломжтой.
        </p>
        <li class="font-weight-bold">Бэхэлгээний төрөл:</li>
        <p>
          Бэхэлгээ нь наалт (70-аас дээш нүүртэй энгийн болон супер хавтастай
          ном), унаа үдээ (70 хүртэл нүүртэй ном), оёо (70 хүртэл нүүртэй номыг
          шулуун оёогоор, 70-аас дээш нүүртэй номыг өндөрлөгөө оёогоор бэхэлнэ),
          спираль гэх мэт байна.
        </p>
        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Бүх төрлийн номын хавтсанд ороолт хавтас, клише (алтлаг, мөнгөлөг
          зэрэг төрөл бүрийн өнгөөр), эмбосс (товойлгох), хуурай даралт
          (хонхойлгох), гялгар, барзгар лак, лазер зүсэлт гэх мэт нэмэлт
          чимэглэлүүд хийснээр таны хэвлүүлсэн бүтээгдэхүүн улам тансаг, үнэ
          цэнэтэй болно.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Номын бэхэлгээний төрлөөс хамааран бэлэн болох хугацааг тодорхойлно.
          Үүнд: <br />Цавуун бэхэлгээ: 1-3 өдөр <br />Үдээн бэхэлгээ: 1-3 өдөр
          <br />Спиралин бэхэлгээ: 2-4 өдөр <br />Хатуу хавтастай: 3-5 өдөр
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Сонин -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="sonin"
  tabindex="-1"
  role="dialog"
  aria-labelledby="soninTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="soninTitle">Сонин</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Бид офсет хэвлэлийн болон сонингийн ротаци хэвлэлийн машинуудаар бүх
        төрлийн сонинг таны хүссэн загвар дизайнаар үйлдвэрлэж байна.
        <li class="font-weight-bold">Хэмжээ:</li>
        <p>
          Стандартын A3, А2 форматаар 780, 720, 620 мм өргөнтэйгээр хэвлэнэ.
        </p>
        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          Дотор хэвлэлийг 48.8 гр/м2 нягтралтай сонингийн цаасан дээр, 80, 105,
          128 зэрэг шохойтой, матт болон офсет цаасан дээр хэвлэх боломжтой.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Дотор хэвлэлийг 1+1 (хар), 4+4 (үндсэн дөрвөн өнгө) өнгөтэй хэвлэнэ.
        </p>

        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Сонингийн тоо ширхэг болон хэвлэлтийн өнгөнөөс хамааран 1-3 хоногт
          үйлдвэрлэнэ.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Танилцуулга, Плакат -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="plakat"
  tabindex="-1"
  role="dialog"
  aria-labelledby="plakatTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="plakatTitle">Танилцуулга, Плакат</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Бид В1 форматын буюу 720*1040 мм хүртлэх өргөн форматаар таны
        танилцуулга плакатыг таны брэндийн онцлогийг тусган пантоне будгаар таны
        хүссэн загвар дизайнаар 5С лак, саатай, матт, гялгар бүрэлт, лазер
        зүсэлт зэрэг орчин үеийн технологиор сэтгэлд тань нийцтэл үйлдвэрлэж
        байна.
        <li class="font-weight-bold">Хэмжээ:</li>
        <p>
          Стандартын A7, B7, A6, B6, A5, B5, A4, B4, A3, B3, A2, B2, A1, B1
          болон стандарт бус хэмжээтэй байх боломжтой.
          <br />А7 (74x105) <br />А6 (105x148) <br />А5 (148x210) <br />A4
          (210x297) <br />А3 (297x420) <br />А2 (420x596) <br />А1 (596x840)
          <br />B7 (88x125) <br />B6 (125x176) <br />B5 (176x250) <br />B4
          (250x353) <br />B3 (353x500) <br />B2 (500x706) <br />B1 (706x1000)<br />
          Хэлбэр хэмжээ, загвар, материалаас хамааран хэлбэрт огтлоо, олон
          хуудастай, нугалаатай, таславчтай гэх мэт байж болно.
        </p>
        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          Хэвлэлтийг 100, 105, 128, 157, 200, 250, 300 гр/м2 нягтралтай
          шохойтой, матт гэх цаасан дээр хийнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Хэвлэлтийг 5+5 (үндсэн 4 өнгө, нэмэлт нэг өнгөтэй) хүртэл өнгөтэй, нэг
          болон хоёр талдаа хэвлэлттэй байж болно.
        </p>
        <li class="font-weight-bold">Бүрэлт:</li>
        <p>
          Гялгар, матт, зөөлөн, саатай гэх мэт бүрэлтээр А3, А2, В3, В2
          форматаар бүрэх боломжтой.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Бүх төрлийн клише (алтлаг, мөнгөлөг зэрэг төрөл бүрийн өнгөөр), эмбосс
          (товойлгох), хуурай даралт (хонхойлгох), гялгар, барзгар лак, лазер
          зүсэлт гэх мэт нэмэлт чимэглэлүүд хийснээр таны хэвлүүлсэн
          бүтээгдэхүүн улам тансаг, үнэ цэнэтэй болно.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Бүтээгдэхүүний тоо ширхэг болон нэмэлт ажиллагаанаас хамааран 1-3
          хоногт үйлдвэрлэнэ.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Өргөмжлөл, Батламж -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="orgomjlol"
  tabindex="-1"
  role="dialog"
  aria-labelledby="orgomjlolTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orgomjlolTitle">Өргөмжлөл, Батламж</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Таны баяр ёслолын хүндэт өргөмжлөл, сургалтын батламж, үнэмлэх зэргийг
        бид нууцлалтайгаар стандарт болон стандарт бус хэмжээтэй хүссэн хэлбэр,
        загвартайгаар лазер болон тигель ухалттай, 5+5 хүртэл өнгийн
        хэвлэлттэйгээр хийж гүйцэтгэж байна.

        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          Хэвлэлтийг 128, 157, 200, 250, 300 гр/м2 нягтралтай шохойтой, матт,
          хээтэй, саатай гэх мэт цаасан дээр, мөн PVC хавтангаар зузаалан хийж
          гүйцэтгэнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Хэвлэлтийг 1+1, 1+0 (хар), 2+2, 2+0 (нэмэлт нэг өнгөтэй), 4+4, 4+0
          (өнгөт), 5+5, 5+0 (өнгөт, нэмэлт нэг өнгөтэй) өнгөтэйгөөр гадна болон
          дотор талдаа хийнэ.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Бүх төрлийн клише (алтлаг, мөнгөлөг зэрэг төрөл бүрийн өнгөөр), эмбосс
          (товойлгох), хуурай даралт (хонхойлгох), гялгар, барзгар лак, лазер
          зүсэлт гэх мэт нэмэлт чимэглэлүүд хийснээр таны хэвлүүлсэн
          бүтээгдэхүүн улам тансаг, үнэ цэнэтэй болно. Мөн нэмэлтээр дугтуй,
          бүслүүр, алтлаг, мөнгөлөг уяа зэрэг чимэглэлийг захиалагчийн хүсэлтээр
          хийнэ.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Бүтээгдэхүүний тоо ширхэг болон нэмэлт ажиллагаанаас хамааран 1-5
          хоногт үйлдвэрлэнэ.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Урилга, Мэндчилгээ -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="invitation"
  tabindex="-1"
  role="dialog"
  aria-labelledby="invitationTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="invitationTitle">Урилга, Мэндчилгээ</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Таны баяр ёслолын урилга, мэндчилгээ зэргийг бид стандарт болон стандарт
        бус хэмжээтэй хүссэн хэлбэр, загвартайгаар лазер болон тигель ухалттай,
        5+5 хүртэл өнгийн хэвлэлттэйгээр хийж гүйцэтгэж байна.

        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          Хэвлэлтийг 128, 157, 200, 250, 300 гр/м2 нягтралтай шохойтой, матт,
          хээтэй, саатай гэх мэт цаасан дээр, мөн PVC хавтангаар зузаалан хийж
          гүйцэтгэнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Хэвлэлтийг 1+1, 1+0 (хар), 2+2, 2+0 (нэмэлт нэг өнгөтэй), 4+4, 4+0
          (өнгөт), 5+5, 5+0 (өнгөт, нэмэлт нэг өнгөтэй) өнгөтэйгөөр гадна болон
          дотор талдаа хийнэ.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Бүх төрлийн клише (алтлаг, мөнгөлөг зэрэг төрөл бүрийн өнгөөр), эмбосс
          (товойлгох), хуурай даралт (хонхойлгох), гялгар, барзгар лак, лазер
          зүсэлт гэх мэт нэмэлт чимэглэлүүд хийснээр таны хэвлүүлсэн
          бүтээгдэхүүн улам тансаг, үнэ цэнэтэй болно. Мөн нэмэлтээр дугтуй,
          бүслүүр, алтлаг, мөнгөлөг уяа зэрэг чимэглэлийг захиалагчийн хүсэлтээр
          хийнэ.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Бүтээгдэхүүний тоо ширхэг болон нэмэлт ажиллагаанаас хамааран 1-5
          хоногт үйлдвэрлэнэ.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Календарь, цаг тооны бичиг -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="calendar"
  tabindex="-1"
  role="dialog"
  aria-labelledby="calendarTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="calendarTitle">
          Календарь, Цаг Тооны Бичиг
        </h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Бид хэрэглэгчдийнхээ оюуны хэрэглээг дэмжин өдөр бүрийн дорнын
        зурхайтай, аргын болон билгийн тоолол, ардын уламжлалт зан үйл, цаг
        агаарыг шинжиж таних арга, илүү сар, өдрийн учир, элдэв үйлд ивээлтэй
        сайн өдрүүдийг тэмдэглэсэн цаглавар, өдөр бүрийн аргын болон билгийн
        тооллыг багтаасан тэмдэглэл хөтлөх боломж бүхий ширээний, ажил
        төлөвлөлтийн ханын, сар сараар эргүүлэх хуудас бүхий ханын зэрэг
        цаглаврыг уламжлал болгон хэвлэн гаргадаг билээ.<br />
        Энхүү цаглавруудыг байгууллагуудын тэмдэглэлт ой, албан хэрэгцээ,
        тэмдэглэлт баяр, бэлэг дурсгал зэрэгт зориулан та бүхэн өөрийн хүссэн
        тоо, хэмжээ загвараар өнгө үзэмж, материалын өргөн сонголттойгоор
        хэвлүүлэх бүрэн боломжтой.

        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          Хэвлэлтийг 80, 105, 128, 157, 200 гр/м2 нягтралтай офсет цагаан
          шохойтой, матт цаасан дээр хийж гүйцэтгэнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Хэвлэлтийг 1+1, 1+0 (хар), 2+2, 2+0 (нэмэлт нэг өнгөтэй), 4+4, 4+0
          (өнгөт), 5+5, 5+0 (өнгөт, нэмэлт нэг өнгөтэй) өнгөтэйгөөр гадна болон
          дотор талдаа хийнэ
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Бүх төрлийн клише (алтлаг, мөнгөлөг зэрэг төрөл бүрийн өнгөөр), эмбосс
          (товойлгох), хуурай даралт (хонхойлгох), гялгар, барзгар лак, лазер
          зүсэлт гэх мэт нэмэлт чимэглэлүүд хийснээр таны хэвлүүлсэн
          бүтээгдэхүүн улам тансаг, үнэ цэнэтэй болно.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Бүтээгдэхүүний тоо ширхэг болон нэмэлт ажиллагаанаас хамааран 3-5
          хоногт үйлдвэрлэнэ.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Үнэт цаас, Нууцлал -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="value"
  tabindex="-1"
  role="dialog"
  aria-labelledby="valueTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="valueTitle">Үнэт цаас, Нууцлал</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Үнэт цаасны нууцлалтай хэвлэлийг гэрчилгээ, диплом, төрөл бүрийн эрхийн
        бичиг, тэтгэвэр, тэтгэмжийн дэвтэр, бензин талон, үнэмлэх, паспорт,
        албан маягт, карт, тасалбар гэх мэт олон төрлийн бүтээгдэхүүнд ашиглаж
        болно. Нууцлалын онцлог нь хэрэглээний программ болон хуулбарлах тоног
        төхөөрөмжөөр олшруулахад хэлбэр дүрс, өнгөө алддаг, зөвхөн үйлдвэрлэлийн
        орчинд хийх боломжтой юм. Манай хийж буй нууцлалын технологиуд:
        <br />• Тусгай программ хангамж ашиглан зурсан үл тасрах зураасан хээг
        пантоне өнгөөр хэвлэх <br />• Голограмм нууцлал бүхий металл наалт
        <br />• Урт болон богино долгионы UV гэрэлд өөр өнгөөр харагддаг, энгийн
        нүдээр үзэгдэхгүй UV будган хэвлэлт

        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          Хэвлэлтийг 80, 105, 128, 157, 200, 250, 300 гр/м2 нягтралтай офсет
          цагаан шохойтой, матт цаасан дээр хийж гүйцэтгэнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Хэвлэлтийг 1+1, 1+0 (хар), 2+2, 2+0 (нэмэлт нэг өнгөтэй), 4+4, 4+0
          (өнгөт), 5+5, 5+0 (өнгөт, нэмэлт нэг өнгөтэй) өнгөтэйгөөр гадна болон
          дотор талдаа хийнэ.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Бүх төрлийн клише (алтлаг, мөнгөлөг зэрэг төрөл бүрийн өнгөөр), эмбосс
          (товойлгох), хуурай даралт (хонхойлгох), гялгар, барзгар лак, лазер
          зүсэлт гэх мэт нэмэлт чимэглэлүүд хийснээр таны хэвлүүлсэн
          бүтээгдэхүүн улам тансаг, үнэ цэнэтэй болно.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Бүтээгдэхүүний тоо ширхэг болон нэмэлт ажиллагаанаас хамааран 1-5
          хоногт үйлдвэрлэнэ.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Бланк -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="blank"
  tabindex="-1"
  role="dialog"
  aria-labelledby="blankTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="blankTitle">Ном</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Уламжлалт албан бичиг, захирлын тушаал, захирамж зэрэг албан бичгийн бэлдэцийг А4, А5 хэмжээтэйгээр принтерийн болон
        бэх, тамганы тогтоц сайтай, сайн чанарын цаасан дээр хэвлэж үйлчилнэ.

        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          80, 100 гр/м2 нягтралтай сайн офсет (цагаан ) цаасан дээр хийнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Хэвлэлтийг 1+1, 1+0 (хар), 2+2, 2+0 (нэмэлт нэг өнгөтэй), 4+4, 4+0 (өнгөт), 5+5, 5+0 (өнгөт, нэмэлт нэг өнгөтэй)
          өнгөтэйгөөр гадна болон дотор талдаа хийнэ.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Хуурай болон өнгөт (алтлаг, мөнгөлөг гэх мэт) дардас, гялгар, барзгар лак гэх мэт нэмэлт чимэглэлүүд хийх боломжтой
        </p>
        <li class="font-weight-bold">Нууцлал:</li>
        <p>
        Шаардлагатай тохиолдолд таны албан бичгийн бэлдэцийг энгийн нүдээр харах боломжгүй бичил бичвэр, тусгай программаар
        зурсан үл тасрах шугаман хээ, хуулбарлах боломжгүй харагддаггүй ион будган хэвлэлт зэрэг нууцлалтайгаар хийж болно.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Билл -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="bill"
  tabindex="-1"
  role="dialog"
  aria-labelledby="billTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="billTitle">Билл</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Уламжлалт албан бичиг, захирлын тушаал, захирамж зэрэг албан бичгийн бэлдэцийг А4, А5 хэмжээтэйгээр принтерийн болон
      бэх, тамганы тогтоц сайтай, сайн чанарын цаасан дээр хэвлэж үйлчилнэ.

        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          80, 100 гр/м2 нягтралтай сайн офсет (цагаан ) цаасан дээр хийнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Хэвлэлтийг 1+1, 1+0 (хар), 2+2, 2+0 (нэмэлт нэг өнгөтэй), 4+4, 4+0 (өнгөт), 5+5, 5+0 (өнгөт, нэмэлт нэг өнгөтэй)
          өнгөтэйгөөр гадна болон дотор талдаа хийнэ.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Хуурай болон өнгөт (алтлаг, мөнгөлөг гэх мэт) дардас, гялгар, барзгар лак гэх мэт нэмэлт чимэглэлүүд хийх боломжтой
        </p>
        <li class="font-weight-bold">Нууцлал:</li>
        <p>
          Шаардлагатай тохиолдолд таны албан бичгийн бэлдэцийг энгийн нүдээр харах боломжгүй бичил бичвэр, тусгай программаар
          зурсан үл тасрах шугаман хээ, хуулбарлах боломжгүй харагддаггүй ион будган хэвлэлт зэрэг нууцлалтайгаар хийж болно.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Дугтуй, Карамтай хавтас -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="dugtui"
  tabindex="-1"
  role="dialog"
  aria-labelledby="dugtuiTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dugtuiTitle">Дугтуй, Карамтай хавтас</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Бүх төрлийн стандарт болон стандарт бус хэмжээтэй дугтуй, карматай хавтасыг таны хүссэн хэлбэр, загвартайгаар, цонхтой,
        лазер болон тигл ухалттай, 5+1 өнгийн хэвлэлттэйгээр хийж гүйцэтгэж байна.
        Та албан захидлын, бичиг баримтын, бэлэг дурсгалын гээд ямар ч зориулалтаар хэмжээ, загварын өргөн сонголттойгоор
        захиалан аваарай.
        Мөн урилга, мэндчилгээнд зориулсан нэмэлт чимэглэл, эсгүүр бүхий дугтуй хийж гүйцэтгэнэ.

        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          Дугтуйг 100, 120, 128, 157, 200, 250 гр/м2 нягтралтай цагаан (офсет), бор гэх мэт цаасан дээр хийнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Дугтуйны хэвлэлтийг 1+0, 2+0 (нэмэлт нэг өнгөтэй), 4+0 (өнгөт), 5+0 (өнгөт, нэмэлт нэг өнгөтэй) өнгөтэйгөөр хийнэ.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Хуурай болон өнгөт (алтлаг, мөнгөлөг гэх мэт) дардас, гялгар, барзгар лак гэх мэт нэмэлт чимэглэлүүд хийнэ.
        </p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Нэрийн хуудас -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="card"
  tabindex="-1"
  role="dialog"
  aria-labelledby="cardTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cardTitle">Нэрийн хуудас</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Таны нэрийн хуудсыг бид стандарт хэмжээ 90*55 мм болон стандарт бус хэмжээтэй, 5c лак, саатай, матт, гялгар бүрэлт,
        лазер зүсэлт зэрэг орчин үеийн технологиор захиалгаар үйлдвэрлэж байна.

        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          250, 200 гр/м2 нягтралтай матт цаасан дээр хийнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          300 гр матт цаасан дээр хэвлэлт хийнэ.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Хуурай болон өнгөт (алтлаг, мөнгөлөг гэх мэт) дардас, гялгар, барзгар лак гэх мэт нэмэлт чимэглэлүүд хийнэ.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
        Бүтээгдэхүүний тоо ширхэг болон нэмэлт ажиллагаанаас хамааран 1-3 хоногт үйлдвэрлэнэ.
        </p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Цаасан уут,тор -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="tor"
  tabindex="-1"
  role="dialog"
  aria-labelledby="torTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="torTitle">Цаасан уут, Тор</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Хэвлэлттэй, хэвлэлтгүй, бэлэг дурсгалын болон гоёлын, тусгай арга хэмжээнд зориулсан бүх төрлийн цаасан тор, хүнсний
        зориулалттай цаасан уутыг таны брэндийн онцлогийг тусган пантоне будгаар таны хүссэн загвар дизайнаар 5С лак, саатай,
        матт, гялгар бүрэлт, лазер зүсэлт зэрэг орчин үеийн технологиор сэтгэлд тань нийцтэл үйлдвэрлэж байна.
        <li class="font-weight-bold">Хэмжээ:</li>
        <p>
          Таны бүтээгдэхүүний онцлог даацаас хамааран стандарт болон стандарт бус хэмжээтэй байх боломжтой.
        </p>
        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          Хэвлэлтийг 80, 90, 190, 210 гр/м2 нягтралтай гялгар уутан дотортой, цагаан болон бор өнгөтэй офсет цаас, матт гэх мэт
          цаасан дээр хийнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
          Дотор хэвлэлийг 1+0 (хар), 2+0 (нэмэлт нэг өнгөтэй), 4+0 (өнгөт), 5+0 (үндсэн 4 өнгө, нэмэлт нэг өнгөтэй) өнгөний
          хослолуудаар хийж гүйцэтгэх боломжтой.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Бүх төрлийн клише (алтлаг, мөнгөлөг зэрэг төрөл бүрийн өнгөөр), эмбосс (товойлгох), хуурай даралт (хонхойлгох), гялгар,
          барзгар лак, лазер зүсэлт гэх мэт нэмэлт чимэглэлүүд хийснээр таны хэвлүүлсэн бүтээгдэхүүн улам тансаг, үнэ цэнэтэй
          болно.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Бүтээгдэхүүний тоо ширхэг болон нэмэлт ажиллагаанаас хамааран 3-7 хоногт үйлдвэрлэнэ.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Шошго -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="shoshgo"
  tabindex="-1"
  role="dialog"
  aria-labelledby="shoshgoTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="shoshgoTitle">Шошго</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Таны хүссэн загвар дизайнаар тусган пантоне будаг, 5С лак, саатай, матт, гялгар бүрэлт, лазер зүсэлт зэрэг орчин үеийн
        технологиор сэтгэлд тань нийцтэл үйлдвэрлэж байна.
        <li class="font-weight-bold">Хэмжээ:</li>
        <p>
          Таны бүтээгдэхүүний онцлогоос хамааран стандарт болон стандарт бус хэмжээтэй байх боломжтой.
        </p>
        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
        100, 105, 120, 128, 140, 157, 200, 250, 300, 350 гр/м2 нягтралтай офсет, шохойтой, матт гэх мэт цаасан дээр хийх
        боломжтой.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
        Дотор хэвлэлийг 1+1 (хар), 2+2 (нэмэлт нэг өнгөтэй), 4+4 (өнгөт), 5+5 (үндсэн 4 өнгө, нэмэлт нэг өнгөтэй) өнгөний
        хослолуудаар хийж гүйцэтгэх боломжтой.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Бүх төрлийн клише (алтлаг, мөнгөлөг зэрэг төрөл бүрийн өнгөөр), эмбосс (товойлгох), хуурай даралт (хонхойлгох), гялгар,
          барзгар лак, лазер зүсэлт гэх мэт нэмэлт чимэглэлүүд хийснээр таны хэвлүүлсэн бүтээгдэхүүн улам тансаг, үнэ цэнэтэй
          болно.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Бүтээгдэхүүний тоо ширхэг болон нэмэлт ажиллагаанаас хамааран 3-7 хоногт үйлдвэрлэнэ.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Хайрцаг сав баглаа боодол -----------------------------------------------------------------------------Хэсэг -->
<div
  class="modal fade"
  id="box"
  tabindex="-1"
  role="dialog"
  aria-labelledby="boxTitle"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="boxTitle">Хайрцаг, Сав, Баглаа, боодол</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Хэвлэлттэй, хэвлэлтгүй, бэлэг дурсгалын болон гоёлын, тусгай арга хэмжээнд зориулсан бүх төрлийн цаасан хайрцагыг таны
        брэндийн онцлог, даацаас хамааран дан болон 3 ба 5 үелээтэйгээр тусган пантоне будгаар таны хүссэн загвар дизайнаар 5С
        лак, саатай, матт, гялгар бүрэлт, лазер зүсэлт зэрэг орчин үеийн технологиор сэтгэлд тань нийцтэл үйлдвэрлэж байна.
        <li class="font-weight-bold">Хэмжээ:</li>
        <p>
          Таны бүтээгдэхүүний онцлог даацаас хамааран стандарт болон стандарт бус хэмжээтэй байх боломжтой.
        </p>
        <li class="font-weight-bold">Цаасны төрөл:</li>
        <p>
          Хэвлэлийг 200, 250, 300, 350 гр/м2 нягтралтай шохойтой, матт цагаан болон бор гэх мэт хайрцагны цаасан дээр хийнэ.
        </p>
        <li class="font-weight-bold">Хэвлэлийн өнгө:</li>
        <p>
        Хэвлэлийг 1+0 (хар), 2+0 (нэмэлт нэг өнгөтэй), 4+0 (өнгөт), 5+0 (үндсэн 4 өнгө, нэмэлт нэг өнгөтэй) өнгөний хослолуудаар
        хийж гүйцэтгэх боломжтой.
        </p>

        <li class="font-weight-bold">Нэмэлт чимэглэл:</li>
        <p>
          Бүх төрлийн клише (алтлаг, мөнгөлөг зэрэг төрөл бүрийн өнгөөр), эмбосс (товойлгох), хуурай даралт (хонхойлгох), гялгар,
          барзгар лак, лазер зүсэлт гэх мэт нэмэлт чимэглэлүүд хийснээр таны хэвлүүлсэн бүтээгдэхүүн улам тансаг, үнэ цэнэтэй
          болно.
        </p>
        <li class="font-weight-bold">Бэлэн болох хугацаа:</li>
        <p>
          Бүтээгдэхүүний тоо ширхэг болон нэмэлт ажиллагаанаас хамааран 3-7 хоногт үйлдвэрлэнэ.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Гарах
        </button>
      </div>
    </div>
  </div>
</div>

<!--Modal Info  ENDED-->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger ml-5" href="#page-top">
			<img class="img-fluid" style="max-height: 75px;" src="images/logo.png" alt="" />
		</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">Эхлэл</a>
			</li>

			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#20year">Бидний тухай</a>
            </li>

			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#catalog">Бүтээгдэхүүний төрөл</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#product">Бүтээгдэхүүн</a>
            </li>

			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#technology">Технологи</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Мэдээ мэдээлэл</a>
            </li>



			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Холбоо Барих</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

@endsection

@section('content')
<section id="home" class="main-banner parallaxie" style="background: url('uploads/iso.png')">
		<div class="heading">
		<div class="mover-logo" id="particle-slider">
							<div class="slides">
								<div id="first-slide" class="slide" data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyAAAAJYCAYAAACadoJwAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkZEQjk5M0M0MjQ2RDExRUE4QkVGQjg5NTRCNDZBMkI1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZEQjk5M0M1MjQ2RDExRUE4QkVGQjg5NTRCNDZBMkI1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkRCOTkzQzIyNDZEMTFFQThCRUZCODk1NEI0NkEyQjUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RkRCOTkzQzMyNDZEMTFFQThCRUZCODk1NEI0NkEyQjUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5r2zXoAACJSklEQVR42uyd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AJteqVKxLw4AAGwaDVYBAAAggAAAAAIIAACAAAIAAAggAAAAAggAACCAAAAAAggAAIAAAgAACCAAAAACCAAAIIAAAAACCAAAgAACAAAIIAAAAAIIAAAggAAAAAIIAACAAAIAAAggAAAAAggAACCAAAAAAggAAIAAAgAACCAAAAACCAAAIIAAAAACCAAAgAACAAAIIAAAAAIIAAAggAAAAAggAACAAAIAAAggAAAAAggAACCAAAAACCAAAIAAAgAACCAAAAACCAAAIIAAAAAIIAAAgAACAAAIIAAAAAIIAAAggAAAAAggAACAAAIAAAggAAAAAggAACCAAAAACCAAAIAAAgAACCAAAAACCAAAIIAAAAAIIAAAgAACAAAggAAAAAIIAAAggAAAAAggAACAAAIAACCAAAAAAggAACCAAAAACCAAAIAAAgAAIIAAAAACCAAAIIAAAAAIIAAAgAACAAAggAAAAAIIAAAggAAAAAggAACAAAIAACCAAAAAAggAACCAAAAACCAAAIAAAgAAIIAAAAACCAAAIIBYBQAAgAACAAAIIAAAAAIIAAAggAAAAAggAACAAAIAAAggAAAAAggAACCAAAAACCAAAIAAAgAACCAAAAACCAAAIIAAAAAIIAAAgAACAAAIIAAAAAIIAAAggAAAAAggAACAAAIAAAggAAAAAggAACCAAAAACCAAAIAAAgAACCAAAAACCAAAIIAAAAAIIAAAgAACAAAggAAAAAIIAAAggAAAAAggAACAAAIAACCAAAAAAggAACCAAAAACCAAAIAAAgAAIIAAAAACCAAAIIAAAAAIIAAAgAACAAAggAAAAAIIAAAggAAAAAggAACAAAIAACCAAAAAAggAACCAAAAACCAAAIAAAgAAIIAAAAACCAAAgAACAAAIIAAAgAACAAAggAAAAAIIAACAAAIAAAggAACAAAIAACCAAAAAAggAAIAAAgAACCAAAIAAAgAAIIAAAAACCAAAgAACAAAIIAAAgAACAAAggAAAAAIIAACAAAIAAAggAACAAAIAACCAAAAAAggAAIAAAgAACCAAAIAAYhUAAAACCAAAIIAAAAAIIAAAgAACAAAggAAAAAIIAAAggAAAAAggAACAAAIAACCAAAAAAggAACCAAAAACCAAAIAAAgAAIIAAAAACCAAAIIAAAAAIIAAAgAACAAAggAAAAAIIAAAggAAAAAggAACAAAIAACCAAAAAAggAADC0/X8BBgBqRMCM78rjMgAAAABJRU5ErkJggg==">
								</div>
							</div>
							<canvas style="max-width:100%; margin:auto;" class="draw"></canvas>
							<script src="js/draw.js"></script>
			</div>
			<h1></h1>
			<h3 class="cd-headline clip is-full-width">

				<span>Бид хамгийн </span>
				<span class="cd-words-wrapper">
					<b class="is-visible">хямд</b>
					<b>Хурдан</b>
					<b>Чанартай</b>
				</span> <span>Соёмбо Принтинг ХХК </span>


				<div class="btn-ber">
					<a class="get_btn hvr-bounce-to-top" href="#20year">Танилцах</a>
				</div>
			</h3>
		</div>
	</section>

    <div id="20year" class="section wb">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-3" >
					<div class="services-inner-box">
						<h2>
							<div class="text-center">
							<img src="uploads/a (1).png" alt="">
							</div>Бидний үнэт зүйлс
							<br>&nbsp;
							<p>* Хэрэглэгч, Харилцагч</p>
							<p>* Найрсаг хамт олон</p>
							<p>* Дэвшилтэт технологи</p>
						</h2>
					</div>
				</div><!-- end col -->
				<div class="col-md-3" >
					<div class="services-inner-box">
						<h2>
							<div class="text-center">
							<img src="uploads/a (2).png" alt="">
							</div>
							Бидний алсын хараа<br>&nbsp;
							<p>Бид шинийг эрэлхийлж, Дэвшилтэт технологиор салбартаа манлайлж хэрэглэгчийнхээ байнгын сонголт байхыг эрхэмлэнэ</p>
						</h2>
					</div>
				</div><!-- end col -->
				<div class="col-md-3" >
					<div class="services-inner-box">
						<h2>
							<div class="text-center">
							<img src="uploads/a (3).png" alt="">
							</div>Бидний чанаырын бодлого
							<p>
								Чин сэтгэлтэй чадварлаг боловсон хүчин, Дэвшилтэт технологи, Хэрэглэгчийн сэтгэл ханамжид суурилан, Чанартай бүтээгдэхүүн үйлдвэрлэж, Байгальд ээлтэй хамтдаа хөгжсөн компани байна
							</p>
						</h2>
					</div>
				</div><!-- end col -->
				<div class="col-md-3" >
					<div class="services-inner-box">
						<h2>
							<div class="text-center">
							<img src="uploads/a (4).png" alt="">
							</div>Бидний эрхэм зорилго
							<p>
								Тэмүүллээр жигүүрлэж, харилцагчаа дээдэлсэн, ямагт шинийг эрэлхийлсэн компани байна
							</p>
						</h2>
					</div>
				</div><!-- end col -->
			</div>  <!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->




    <div id="services" class="section lb" >
	<div class="container-fluid">
		<div class="section-title text-center">
			<h3>Үйлчилгээ</h3>
			<p></p>
		</div><!-- end title -->

		<div class="row widget-list">
			<div class="col-md-1"></div>
			<div class="col-md-2 widget" >
					<div class="services-inner-box">

							<img class="w-100" style="position: relative; z-index:1;" src="uploads/undraw/calculator.png" alt="1">

						<h2>Захиалга хүлээн авах</h2>
						<p>Захиалах бүтээгдэхүүний нэр төрөл, хэлбэр хэмжээ, техник үзүүлэлтийг захиалгын менежерт мэдэгдэж урьдчилсан үнийн санал, бүтээгдэхүүн бэлэн болох тойм хугацааг гаргуулна.</p>
					</div>
				</div><!-- end col -->
				<div class="col-md-2 widget" >
					<div class="services-inner-box">
						<img class="w-100" style="position: relative; z-index:1;" src="uploads/undraw/process.png" alt="1">
						<h2>Эх бэлтгэл, дизайн</h2>
						<p>Бүтээгдэхүүний эх загвар, дизайныг хийлгэж, 1-2 удаа уншилтыг хэвлүүлэн авч засварлан баталгаажуулсны дараа захиалга өгч
						баталгаажуулна.</p>
					</div>
				</div><!-- end col -->
				<div class="col-md-2 widget" >
					<div class="services-inner-box">
						<img class="w-100" style="position: relative; z-index:1;" src="uploads/undraw/printing.png" alt="1">
						<h2>Хэвлэх</h2>
						<p>Эх нь эцсийн байдлаар батлагдан дараагийн дамжлагад шилжин, хавтан боловсруулах, хэвлэх цехүүдээр технологийн дагуу хэвлэгдэн гарна.</p>
					</div>
				</div><!-- end col -->
				<div class="col-md-2 widget" >
					<div class="services-inner-box">
						<img class="w-100" style="position: relative; z-index:1;" src="uploads/undraw/process-next.png" alt="1">
						<h2>Хэвлэлийн дараах</h2>
						<p>Хэвлэх цехээс гарсан хэвлэмэл хуудсуудыг автомат нугалаа, холио, үдээ, оёо болон наалт, чамин урлал зэрэг цехүүдээр дамжин эцсийн бүтээгдэхүүн болно.</p>
					</div>
				</div><!-- end col -->
				<div class="col-md-2 widget">
					<div class="services-inner-box">
						<img class="w-100" style="position: relative; z-index:1;" src="uploads/undraw/done.png" alt="1">
						<h2>Бэлэн бүтээгдэхүүн</h2>
						<p>Бэлэн болсон бүтээгдэхүүний чанарыг шалгасны дараа пресслэх, хайрцаглах, пакетлах зэрэг баглаа боодлын аль тохиромжтойг сонгон савлаж, захиалагчийн гарт хүргэнэ.</p>
					</div>
				</div><!-- end col -->
		</div>

	</div>
    </div><!-- end section -->
	<div id="partner" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<h3>Хамтрагч Байгууллага</h3>
				<p></p>
			</div><!-- end title -->
		<div class="row widget-list">
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray9.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray2.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray3.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray4.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray5.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray6.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray7.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray8.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray10.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray11.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray12.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray13.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray14.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray15.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray16.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray17.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray18.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray19.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray20.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray21.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray22.png" alt="partner">
			</div>
			<div class="col-md-2 col-sm-3 mt-5 widget">
				<img class="partner-img" src="uploads/partner/har-gray23.png" alt="partner">
			</div>
		</div>

		</div>
	</div>

	<div id="catalog" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<h3>Бүтээгдэхүүний төрөл</h3>
				<p></p>
			</div><!-- end title -->
		<div class="row">
            <!--book-->
			<div class="col-md-12">
				<button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#book">
                    <i  class="fa fa-book"></i> Ном
				</button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#setguul">
                    <i  class="fab fa-affiliatetheme"></i> Сэтгүүл
                </button>
            </div>
            <div class="col-md-12">
                <button  style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#sonin">
                    <i  class="far fa-newspaper"></i>  Сонин
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#plakat">
                    <i  class="fa fa-sticky-note"></i> Танилцуулга, Плакат
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#orgomjlol">
                    <i  class="fa fa-certificate"></i> Өргөмжлөл, Батламж
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#invitation">
                    <i  class="fas fa-paper-plane"></i> Урилга, Мэндчилгээ
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#calendar">
                    <i  class="fa fa-calendar"></i> Календарь, Цаг тооны бичиг
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#value">
                    <i  class="fas fa-money-check-alt"></i> Үнэт цаас, Нууцлал
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#blank">
                    <i  class="fas fa-chalkboard"></i> Бланк
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#bill">
                    <i  class="fas fa-file-invoice-dollar"></i> Билл
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#dugtui">
                    <i  class="fa fa-envelope"></i> Дугтуй, Карамтай хавтас
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#card">
                    <i  class="fa fa-credit-card"></i> Нэрийн хуудас
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" ddata-toggle="modal" data-target="#shoshgo">
                    <i  class="fa fa-mail-bulk"></i> Шошго
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#tor">
                    <i  class="fas fa-shopping-bag"></i> Цаасан уут, Тор
                </button>
            </div>
            <div class="col-md-12">
                <button style="font-size:24px" class="text-left w-100 uk-h2 btn btn-primary" data-toggle="modal" data-target="#box">
                    <i  class="fa fa-gift"></i> Хайрцаг, Сав, Багалаа, Боодол
                </button>
            </div>



		</div>

		</div>
	</div>

	<div id="product" class="section lb" >
		<div class="container">
			<div class="section-title text-left">
                <h3>Бүтээгдэхүүн <span class="alert alert-warning">Засвартай</span> </h3>
                <p>Бид өдрөөс, өдөрт шинийг эрэлхийлдэг.</p>
            </div><!-- end title -->

			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-left">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".gal_a">Ном</button>
						<button data-filter=".gal_b">Сэтгүүл</button>

					</div>
				</div>
			</div>

			<div class="gallery-list row">
				<div class="col-md-3 col-sm-6 gallery-grid gal_b">
					<div class="gallery-single fix">
						<img style="height:300px;" src="uploads/setguul/s (1).png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/setguul/s (1).png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grid gal_b">
					<div class="gallery-single fix">
						<img style="height:300px;" src="uploads/setguul/s (2).png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/setguul/s (2).png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i
									class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 gallery-grid gal_b">
					<div class="gallery-single fix">
						<img style="height:300px;" src="uploads/setguul/s (3).png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/setguul/s (3).png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 gallery-grid gal_a">
					<div class="gallery-single fix">
						<img style="height:300px;" src="uploads/nom/n (1).png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/nom/n (1).png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 gallery-grid gal_a">
					<div class="gallery-single fix">
						<img style="height:300px;" src="uploads/nom/n (2).png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/nom/n (2).png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 gallery-grid gal_a">
					<div class="gallery-single fix">
						<img style="height:300px;" src="uploads/nom/n (3).png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/nom/n (3).png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 gallery-grid gal_a">
					<div class="gallery-single fix">
						<img style="height:300px;" src="uploads/nom/n (4).png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/nom/n (4).png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 gallery-grid gal_a">
					<div class="gallery-single fix">
						<img style="height:300px;" src="uploads/nom/n (5).png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/nom/n (5).png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 gallery-grid gal_a">
					<div class="gallery-single fix">
						<img style="height:300px;" src="uploads/nom/n (6).png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/nom/n (6).png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
    </div>


	<div id="technology" class="section wb">
        <div class="uk-container uk-container-large">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="message-box">
                        <h2>Inkzone CIP4 өнгөний удирдлагын онлайн системийн онцлог, танилцуулга</h2>
                        <p> Соёмбо Принтинг ХХК 2019 оны 6-р сард Швейцарь улсын Zurikh хотод байрлалтай DIGITAL INFORMATION компанийн INKZONE CIP4 өнгөний удирдлагын цогц онлайн системийг амжилттай нэвтрүүллээ. Тус систем нь CTP RIP программаас өнгөний орцыг CIP4 хэл дээр хөрвүүлэн авч хэвлэлийн машины будгийн түлхүүрт автоматаар шилжүүлснээр хэвлэгчийн ур чадвар, хариуцлагаас хамаарах өнгөний зөрөөг арилгаж, DI Plot, InkZone Loop, InkZone Move, InkZone Connect зэрэг цогц программ хангамж, тоног төхөөрөмжийн тусламжтайгаар дардас цааснаас өнгөний шкаллыг уншиж, дахин тохиргоо хийснээр хэвлэлтийн өнгөний хэлбэлзэл, будаг өгөлтөөс шалтгаалсан хувирлыг үгүй болгодог. Энэхүү системийг суурилуулж, амжилттай нэвтрүүлснээр хэвлэлтийн өнгөний тогтвортой байдлыг дээд зэргээр хангаж, нэгж ажил эхлэх хугацаа, бэлтгэл ажлыг 15 хүртэл хувиар бууруулснаар цахилгаан эрчим хүч, хүн цагийг хэмнэж, хэвлэлтийн явцад автоматаар дахин тохиргоо хийснээр гарч болох үл тохирол, бусад эрсдлийг мэдэгдэхүйц бууруулаад байна.</p>

                        <a href="#" style="display:none" class="sim-btn hvr-bounce-to-top"><span>Contact Us</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6 mt-5">
                    <div class="right-box-pro wow fadeIn">
                        <img style="max-height:600px" src="uploads/top/inkzone-1.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div><!-- end row -->

			<div class="row mt-5" >
				<div class="col-md-6 mt-5">
                    <div class="right-box-pro wow fadeIn">
                        <img style="max-height:600px" src="uploads/iso.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-6 mt-5">
                    <div class="message-box">
                        <h2>ISO 9001-2015 олон улсын чанарын удирдлагын тогтолцоо</h2>
                        <p> Бид ISO 9001-2015 чанарын удирдлагын тогтолцоогоо амжилттай нэвтрүүлэн 2 удаагаа баталгаажууллаа. Соёмбо принтинг компани 2017 оноос эхлэн үйлдвэрлэл, бүтээгдэхүүн үйлчилгээнийхээ чанарыг дээшлүүлэх, ажилчдын ажиллах орчинд сайжруулах, харилцагчидын сэтгэл ханамжийг нэмэгдүүлэх зорилгоор ISO 9001-2015 Олон улсын чанарын удирдлагын тогтолцоог нэвтрүүлсэн билээ. 2018 онд бид олон улсын аудитын SES байгууллагатай хамтарч ажиллан ажлаа дүгнүүлэн чанарын удирдлагын тогтолцооны сертификатаа гардан авсан билээ. 2019 оны 12 сард 2 дахь шатны аудитын шалгалтаар "Олон улсын чанарын удирдлагын тогтолцоо" нэвтрүүлсэн гэдгээ батлан 2 дахь удаагаа баталгаажуулав.</p>

                        <a href="#" style="display:none" class="sim-btn hvr-bounce-to-top"><span>Contact Us</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
			</div><!-- end row -->
			<div class="row mt-5" >
                <div class="col-md-6 mt-5">
                    <div class="message-box">
                        <h2>Soyombo spelling алдаа шалгагч программ</h2>
                        <p> Бид нийгмийн хариуцлагын хүрээнд алдаагүй бүтээгдэхүүн үйлдвэрлэх зорилгоор Soyombo spelling программ зохион бүтээв.
							2018 оны 9-р сараас эхлэн “Соёмбо Принтинг” ХХК-ийн санаачлагаар уг алдаа шалгагчийг Монгол Улсын Ерөнхийлөгчийн дэргэдэх Хэлний бодлогын үндэсний зөвлөлөөс эрхлэн гаргасан “Монгол хэлний зөв бичих дүрмийн журамласан толь”-д тулгуурлан үгийн санг бүрдүүлж, дүрмийн өөрчлөлтүүдийг тусган хөгжүүлж эхэлсэн билээ.
							Уг алдаа шалгагчийг 2019 оны 5-р сараас туршилтын журмаар компанийн дотоод үйл ажиллагаанд хэрэглэж эхэлсэн бөгөөд 2019 оны 7-р сарын 1-ний өдрийн 10834 тоот зохиогчийн эрхийн гэрчилгээгээр уг алдаа шалгагчийн зохиогчийн эрхийг баталгаажуулсан.
								Уг алдаа шалгагч нь эх бэлтгэлийн мэргэжлийн программ буюу InDesign CC+ бүх хувилбар, InCopy CC+ бүх хувилбар дээр нэмэлт хэлбэрээр суурилуулдаг бөгөөд тус программын үндсэн үйлдэлд тулгуурлан ажилладаг тул ямар нэгэн нэмэлт ачаалал үүсгэдэггүй, эх бэлтгэгч, дизайнер, хэрэглэгчдийн анзаараагүй үг үсгийн алдааг тодотгон харуулж, цаг хугацаа, эд материалын хэмнэлт гаргаж, эх бэлтгэлийн явцад үг үсгийн алдаа гарахаас найдвартай хамгаалдгаараа давуу талтай билээ.
								SOYOMBO SPELLING алдаа шалгагч нь Монгол Улсын Ерөнхийлөгчийн дэргэдэх Хэлний бодлогын үндэсний зөвлөлөөс эрхлэн гаргасан “Монгол хэлний зөв бичих дүрмийн журамласан толь”-д тулгуурласан, мөн "Монгол хүний нэрийн толь"-д багтсан 25700 гаруй хүн, газар усны оноосон нэр, түүний дүрмийн бүх хувилал, 35000 орчим үйл үгийн 10 сая орчим хувиллыг ялган таньдаг бөгөөд нийтдээ 92000 гаруй үндсэн үгийн сантай, түүний 80 сая гаруй дүрмийн хувиллыг таних чадвартай, эх бэлтгэлийн мэргэжлийн программууд дээр ажилладаг.
						Бид улирал тутамд үгийн сангийн шинэчлэлт, дүрмийн хувиллын сайжруулалтыг гарган ажиллаж байна.
								Энэхүү алдаа шалгагч нь манай компаниас нийгмийн хариуцлагын хүрээнд зохион байгуулсан томоохон төсөл бөгөөд уг алдаа шалгагчийн тусламжтайгаар хэвлэгдэн гарч буй ном товхимол, бусад бүтээгдэхүүнүүд бидний хойч ирээдүй болсон хүүхдүүд, тэдний эцэг эхчүүдийн гар дээр үг үсгийн алдаагүй, үлгэр жишээ бүтээгдэхүүн болон очсоноороо тэдний боловсролд оруулж буй томоохон хувь нэмэр хэмээн бид үзэж байна.
						Эх орон, эргэх орчлонгийн түүх соёлыг барлан туурвигч мэргэжил нэгт эрхмүүддээ ажил хөдөлмөр, уран бүтээлийн өндөр амжилтыг хүсэн ерөөе.</p>

                        <a href="#" style="display:none" class="sim-btn hvr-bounce-to-top"><span>Contact Us</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6 mt-5">
                    <div class="right-box-pro wow fadeIn">
                        <img style="max-height:600px" src="uploads/top/spelling.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div><!-- end row -->
			<div class="row mt-5" >
				<div class="col-md-6 mt-5">
                    <div class="right-box-pro">
                        <img style="max-height:600px" src="uploads/top/pantone.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-6 mt-5">
                    <div class="message-box">
                        <h2>Pantone solid coated Онцлог, танилцуулга</h2>
                        <p> 2019 оны 9-р сараас эхлэн “Соёмбо Принтинг” ХХК БНСУ-ын DAIHAN INK Co.,Ltd-ээс албан ёсны эрхтэйгээр олон улсын PANTONE өнгөний системийн үндсэн 2300 гаруй өнгийн будгийг импортолж, салбартаа анх удаа PANTONE будгийг стандартын дагуу найруулан өөрсдийн үйлдвэрлэлд болон бусад хэвлэлийн компаниудад борлуулж эхлээд байна.
		Тус өнгөний систем нь олон улсын хэвлэл болон бүх төрлийн будаг, өнгөт хавтан, тавилга, интерьер болон экстерьер дизайн гэх мэт маш өргөн хүрээтэй хэрэглэгддэг бөгөөд өнгийг ямар ч алдаагүй найдвартай дамжуулах шилдэг систем билээ.
		Манай компани 2019 оны 9-р сараас тус системийн дагуу үндсэн суурь өнгөнөөс 0,001 гр нарийвчлалтайгаар 2300 гаруй өнгийг найруулж өөрийн үндсэн хэрэглээнд туршиж эхэлсэн бөгөөд 10-р сарын 15-наас албан ёсоор худалдаанд гаргаад байна.</p>

                        <a href="#" style="display:none" class="sim-btn hvr-bounce-to-top"><span>Contact Us</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
			</div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	<div id="contact" class="section lb" >
		<div class="container">
			<div class="section-title text-center">
                <h3>Бидэнтэй Холбогдох</h3>
                <p></p>
            </div><!-- end title -->

			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#28a9e2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
									L0.732,193.75z"></path>
									<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="35">Хүний нөөц</text>
                            </g>

                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">BizNetwork</h3>
                            <ul class="pricing-content">
                                <li><b>Хүний нөөцтэй</b> Холбогдох</li>
                                <li><b>Ажлын анкет</b> шалгах</li>

                            </ul>
                            <a href="https://www.biznetwork.mn/company/Soyombo-printing" class="sim-btn hvr-bounce-to-top pricingTable-signup">Шилжих</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable blue">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#28a9e2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
									L0.732,193.75z"></path>
									<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="35">Social сүлжээ</text>
                            </g>

                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Facebook</h3>
                            <ul class="pricing-content">
                                <li><b>Шинэ мэдээлэл</b> авах</li>
                                <li><b>Урамшуулал</b> үзэх</li>
                                <li><b>Хурдан Холбогдох</b></li>

                            </ul>
                            <a href="https://www.facebook.com/SoyomboPrinting/" class="sim-btn hvr-bounce-to-top pricingTable-signup">Шилжих</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable red">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#28a9e2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
                            </g>
                           <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="30">Хурдан холбогдох</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Холбогдох Утас</h3>
                            <ul class="pricing-content">
                                <li><b>+976 9556 9646</b></li>
                                <li><b>info@soyomboprinting.com</b></li>

                            </ul>
                            <a href="tel:95569646" class="sim-btn hvr-bounce-to-top pricingTable-signup">Залгах</a>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Шуудан үлдээх <span class="alert alert-warning">Засвартай</span></h3>
                <p>Бид ажлын 24 цагийн дотор хариу илгээх болно</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" type="tel" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn hvr-bounce-to-top" type="submit">Send Message</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
				<a href="#"></a>
                <div class="footer-center">
                    <p class="footer-links">

                    </p>
                    <p class="footer-company-name">Соёмбо Принтинг ХХК. &copy; 2020 </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/uikit.min.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>


	 <script>

      ScrollReveal().reveal('.widget', { interval: 200 });
    </script>
@endsection
