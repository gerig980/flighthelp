<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application for Compensation</title>
    <style type="text/css">
      * {
        margin: 0;
        padding: 0;
        text-indent: 0;
      }
      body{
        padding: 4rem;
      }
      .s1 {
        color: #0c72ff;
        font-family: "Trebuchet MS", sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 20pt;
      }
      .s2 {
        color: #0c3072;
        font-family: "Trebuchet MS", sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 9pt;
      }
      .s3 {
        color: #0c3072;
        font-family: "Trebuchet MS", sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 12pt;
      }
      .s4 {
        color: black;
        font-family: "Trebuchet MS", sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 1pt;
      }
      p {
        color: #0c3072;
        font-family: "Trebuchet MS", sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 7pt;
        margin: 0pt;
      }
      .s5 {
        color: #0c3072;
        font-family: "Trebuchet MS", sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }
      .s6 {
        color: #0c3072;
        font-family: "Trebuchet MS", sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 8pt;
      }
      .a,
      a {
        color: #0c72ff;
        font-family: "Trebuchet MS", sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 7pt;
      }
      .s8 {
        color: #0c2f72;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 8.5pt;
      }
      .s9 {
        color: #0c2f72;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 8.5pt;
      }
      .s10 {
        color: #0c2f72;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 8.5pt;
      }
      li {
        display: block;
      }
      #l1 {
        padding-left: 0pt;
      }
      #l1 > li > *:first-child:before {
        content: "- ";
        color: #0c3072;
        font-family: "Trebuchet MS", sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 7pt;
      }
      table,
      tbody {
        vertical-align: top;
        overflow: visible;
      }
    </style>
  </head>
  <body>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="padding-left: 5pt; text-indent: 0pt; text-align: left">
      <span
        ><table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
              <img
                width="104"
                height="39"
                src="{{ public_path('frontend/assets/images/skyrights/skyrightslogo.png') }}"
              />
            </td>
          </tr></table
      ></span>
    </p>
    <p
      class="s1"
      style="
        padding-top: 14pt;
        padding-left: 5pt;
        text-indent: 0pt;
        text-align: left;
      "
    >
      Assignment Form
    </p>
    <p
      class="s2"
      style="
        padding-top: 4pt;
        padding-left: 5pt;
        text-indent: 0pt;
        text-align: left;
      "
    >
      {{ $application->created_at }}
    </p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p
      class="s3"
      style="
        padding-top: 4pt;
        padding-left: 5pt;
        text-indent: 0pt;
        text-align: left;
      "
    >
      {{ $application->name }} {{ $application->surname }}
    </p>
    <p
      class="s3"
      style="
        padding-top: 6pt;
        padding-left: 5pt;
        text-indent: 0pt;
        text-align: left;
      "
    >

    </p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p
      class="s2"
      style="
        padding-top: 4pt;
        padding-bottom: 2pt;
        padding-left: 5pt;
        text-indent: 0pt;
        text-align: left;
      "
    >
      First name and Last name (the “Client”) Booking reference
    </p>
    <p
      class="s4"
      style="
        padding-left: 5pt;
        text-indent: 0pt;
        line-height: 1pt;
        text-align: left;
      "
    ></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p
      style="
        padding-left: 5pt;
        text-indent: 0pt;
        line-height: 1pt;
        text-align: left;
      "
    />
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p
      style="
        padding-left: 5pt;
        text-indent: 0pt;
        line-height: 1pt;
        text-align: left;
      "
    />
    <p
      class="s2"
      style="
        padding-top: 3pt;
        padding-left: 5pt;
        text-indent: 0pt;
        text-align: left;
      "
    >
      Address
    </p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p
      style="
        padding-top: 4pt;
        padding-left: 5pt;
        text-indent: 0pt;
        line-height: 114%;
        text-align: left;
      "
    >
      The Client hereby assigns to SkyRights.al
      full ownership and legal title to his/her Claim, meaning any claim against
      the airline for monetary and goodwill compensation, damages or refund
      pursuant to Regulation (EC) No 261/2004, the Montreal Convention 1999
      (MC99), the Brazilian Consumer Code and Brazilian Aeronautical Code, UK
      Air Passenger Rights Law (“UK261”), Turkish “SHY” passenger regulation,
      Canadian Transportation Act: Air Passenger Protection Regulations, or as a
      gesture of goodwill in relation to the above operated flight(s) identified
      by the booking reference pursuant to the T&amp;C.
    </p>
    <p
      style="
        padding-top: 5pt;
        padding-left: 5pt;
        text-indent: 0pt;
        line-height: 114%;
        text-align: left;
      "
    >
      The Client authorizes SkyRights to request the operating carrier not to
      process his/her personal data in relation to the Claim pursuant to
      applicable personal data protection laws, except only to verify the Claim.
    </p>
    <p
      style="
        padding-top: 6pt;
        padding-left: 5pt;
        text-indent: 0pt;
        line-height: 114%;
        text-align: left;
      "
    >
      The Client understands that this means that he/she cannot accept any
      direct contact or payment from the operating carrier.
    </p>
    <p
      style="
        padding-top: 6pt;
        padding-left: 5pt;
        text-indent: 0pt;
        line-height: 114%;
        text-align: left;
      "
    >
      If the assignment pursuant to this assignment form is declared invalid for
      any reason, the assignment form shall be considered a power of attorney
      granted by the Client to SkyRights, pursuant to which SkyRights is granted
      exclusive power, with full substitution right, to:
    </p>
    <ul id="l1">
      <li data-list-text="-">
        <p
          style="
            padding-top: 6pt;
            padding-left: 8pt;
            text-indent: -3pt;
            text-align: left;
          "
        >
          represent the Client legally before third parties in relation to the
          Claim;
        </p>
        <p style="text-indent: 0pt; text-align: left"><br /></p>
      </li>
      <li data-list-text="-">
        <p
          style="
            padding-left: 5pt;
            text-indent: 0pt;
            line-height: 114%;
            text-align: left;
          "
        >
          obtain every type of information required, as well as to initiate
          information requests with respect to any civil or administrative law
          proceeding and to initiate complaints with the respective courts or
          administrative bodies responsible for the enforcement of air passenger
          rights regulation on behalf of the Client;
        </p>
      </li>
      <li data-list-text="-">
        <p
          style="
            padding-top: 6pt;
            padding-left: 5pt;
            text-indent: 0pt;
            line-height: 114%;
            text-align: left;
          "
        >
          initiate, conduct and undertake every type of negotiations as well as
          legal - judicial and extrajudicial - measures appropriate to collect
          Client&#39;s Claim from the operating carrier;
        </p>
      </li>
      <li data-list-text="-">
        <p
          style="
            padding-top: 5pt;
            padding-left: 5pt;
            text-indent: 0pt;
            line-height: 114%;
            text-align: left;
          "
        >
          request the operating carrier not to process his/her personal data in
          relation to the Claim pursuant to applicable personal data protection
          laws, except only to verify the Claim;
        </p>
      </li>
      <li data-list-text="-">
        <p
          style="
            padding-top: 6pt;
            padding-left: 8pt;
            text-indent: -3pt;
            text-align: left;
          "
        >
          collect and receive payments in relation to the Claim on the
          Client&#39;s behalf.
        </p>
      </li>
    </ul>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left">
      <span
        ><table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
              <img
                width="147"
                height="73"
                src="{{ public_path('images/' . $application->signature) }}"
              />
            </td>
          </tr></table
      ></span>
    </p>
    <p
      class="s5"
      style="
        padding-top: 4pt;
        padding-left: 334pt;
        text-indent: 0pt;
        text-align: left;
      "
    >
    {{ \Carbon\Carbon::parse($application->created_at)->format('d/M/y') }}
    </p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p
      style="
        padding-left: 346pt;
        text-indent: 0pt;
        line-height: 1pt;
        text-align: left;
      "
    />
    Date
    <p
      class="s2"
      style="
        padding-top: 5pt;
        padding-left: 20pt;
        text-indent: 0pt;
        text-align: left;
      "
    >
      Signature 
    </p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p
      class="s6"
      style="
        padding-top: 4pt;
        padding-left: 5pt;
        text-indent: 0pt;
        text-align: left;
      "
    >
      * The defined terms in this Assignment Form shall have the meaning given
      to them in our Terms and Conditions
    </p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left" />
    <p
      style="
        padding-top: 4pt;
        padding-left: 5pt;
        text-indent: 0pt;
        text-align: left;
      "
    >
      <a
        href="mailto:info@skyrights.al"
        style="
          color: #0c3072;
          font-family: 'Trebuchet MS', sans-serif;
          font-style: normal;
          font-weight: normal;
          text-decoration: none;
          font-size: 7pt;
        "
        target="_blank"
        >Got questions? Ask here </a
      ><a href="https://www.skyrights.al/" class="a" target="_blank"
        >info@skyrights.al </a
      ><a href="http://www.skyrights.al/" target="_blank">www.skyrights.al</a>
    </p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    
    </table>
  </body>
</html>
